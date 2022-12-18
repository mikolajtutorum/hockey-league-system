<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DiscordNotificationDemo extends Controller
{
    public function index()
    {
        return Http::post('https://discord.com/api/webhooks/1053822675623088280/6SUcrDAoOb4HWNGapKNhO0ner4fl9_1zDMX3nIOkDjJ1tfNZTi7lnjuZiSOb3LPl0RLJ', [
            'content' => "Test Notification from Laravel",
            'embeds' => [
                [
                    'title' => "Mikk is great",
                    'description' => "OMG i hope it works :)",
                    'color' => '7506394',
                ]
            ],
        ]);
    }
}
