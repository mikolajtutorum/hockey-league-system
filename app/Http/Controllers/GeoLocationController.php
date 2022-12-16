<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class GeoLocationController extends Controller
{
    public function getClientIps(Request $request)
    {
        $ip = \Request::ip();
        $data = \Location::get($ip);

        if (empty($data)) {
            return redirect('en');
        }
        else if (isset($data)) {

            $geo = $data->countryName;

            if ($geo == "United Kingdom") {
                return redirect('en');
            }
            else if ($geo == "Poland") {
                return redirect('pl');
            }
            else {
                return redirect('en');
            }
        }
    }
}
