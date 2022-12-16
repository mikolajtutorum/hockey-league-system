<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;
use Carbon\Carbon;
use App\Services\TurnIOServiceInterface;
use App\Services\TwilioServiceInterface;
use Session;
use DateTime;
use DateTimeZone;

//Helper Service provider
class HelperService implements HelperServiceInterface
{
    private $turnio;
    private $twilio;
    
    public function __construct(TurnIOServiceInterface $turnio, TwilioServiceInterface $twilio) {
        $this->turnio = $turnio;
        $this->twilio = $twilio;
    }
}