<?php

namespace App\Services;

//Interface for turn.io Service
interface TwilioServiceInterface
{
    /**
     * This function first checks whether the given number is valid WhatsApp number or not and then send the activation code to the WhatsApp Number
     *
     * @return boolean
     */
    public function sendActivationCodeToWhatsApp($phonenumber, $activationcode);

    /**
     * This function first send the phone number to Turn.io API and checks it is is valid WhatsApp number or not
     *
     * @return boolean
     */
    public function checkWhatsAppIDOfPhoneNumber($phonenumber);
}