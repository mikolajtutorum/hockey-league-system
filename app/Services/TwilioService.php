<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;
use Twilio\Rest\Client;

//Turn.io Service provider
class TwilioService implements TwilioServiceInterface
{
    //local variable for twilio sid
    public $sid;
    //local variable for twilio token
    public $token;
    //local variable for twilio number
    public $number;



    public function __construct() {
        $this->token = env('TWILIO_TOKEN');
        $this->sid = env('TWILIO_SID');
        $this->number = env('TWILIO_FROM');
    }



    public function sendMessageWhatsAppWithTemplate($phonenumber, $template, $op_id = null)
    {
        $twilio = new Client($this->sid, $this->token);
        // Attempts to send the message.
        try {
            $messages = $twilio->messages->create(
                // The number to send the message to.
                "whatsapp:$phonenumber",
                [
                    "from" => "whatsapp:$this->number",
                    "body" => $template
                ]);
            return true;
        } catch (\Exception $e) {
            throw new WhatsAppException($e->getMessage());
        }
    }



    /**
     * This function first send the phone number to Turn.io API and checks it is is valid WhatsApp number or not
     *
     * @return boolean
     */
    public function checkWhatsAppIDOfPhoneNumber($phonenumber) {
        //json data to send in the API
        $data = array(
            "contacts" => [
                $phonenumber
            ]
        );
        //checks if the phone number is valid or not by calling the api
        $response = json_decode(Http::withHeaders([
            'Authorization' => "Bearer {$this->token}"
        ])->post(
            //contacts api of Turn.io
            $this->turnurl."contacts", $data
        )->getBody()->getContents()); 
        
        //stores the status from the returned response
        $currentStatus = $response->contacts[0]->status;

        switch($currentStatus) {
            case "processing":
                //on first API call, the phone number will be process and the api returns the state only in the second call, so recursion is used here to do the call again
                $this->checkWhatsAppIDOfPhoneNumber($phonenumber);
                break;
            case "invalid":
                //if the phone number is invalid, function will return false
                return false;
                break;
            case "valid":
                //if the phone number is valid, function will return the WhatsApp id returned from the API
                return $response->contacts[0]->wa_id;
                break;
            default:
                //by default the function return false
                return false;
                break;
        }
    }

    public function SMSNotification($phonenumber, $template, $op_id = null)
    {

        $account_sid = config('services.twilio.key');
        $auth_token = config('services.twilio.token');
        $twilio_number = config('services.twilio.number');
  
        try {
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($phonenumber, [
                'from' => $twilio_number, 
                'body' => $template]);
            return true;
        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }
}
