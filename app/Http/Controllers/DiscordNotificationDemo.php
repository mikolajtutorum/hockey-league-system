<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DiscordNotificationDemo extends Controller
{
    public function index()
    {
        return Http::post('https://discord.com/api/webhooks/1053822675623088280/6SUcrDAoOb4HWNGapKNhO0ner4fl9_1zDMX3nIOkDjJ1tfNZTi7lnjuZiSOb3LPl0RLJ', [
            'content' => "Stats have been updated! Check them out on [hshl.net.pl](https://hshl.net.pl)",
            'embeds' => [
                [
                    'title' => "Match: X vs. Y",
                    'description' => "Score: 3-0",
                    'color' => '7506394',
                ]
            ],
        ]);
    }
}
