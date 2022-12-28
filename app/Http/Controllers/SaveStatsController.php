<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SaveStats;

class SaveStatsController extends Controller
{
    public function savestats(Request $request)
    {
        //$data = $request->all();

        // $data = json_decode("$request");

        // {"guid":"6ea1a6b3-02dd-4684-9a44-102bccdbfb37","time":"2022/12/27 13:54:26","redname":"RED","bluename":"BLUE","redscore":0,"bluescore":0,"penaltiesredscore":0,"penaltiesbluescore":0,"whenend":"Match Not Ended","betony":[],"goals":[],"assists":[],"ct":[{"tercion":1,"team":"RED"},{"tercion":1,"team":"BLUE"}],"redshots":0,"blueshots":0,"saves":[],"periods":[{"period":1,"redscore":0,"bluescore":0}],"redface":1,"blueface":0,"redposs":null,"blueposs":null,"redtouches":1,"bluetouches":0,"redPasses":0,"bluePasses":0,"redPassesCom":0,"bluePassesCom":0,"redInterceptions":0,"blueInterceptions":0,"ycards":[],"rcards":[],"timeRink":[{"name":"MJF","time":"NaN:NaN","team":"RED"}]}
        //$data = json_decode($request, true);
        //$data = json_decode($data, true);

        $savestats = new SaveStats;
        $savestats->text = $request;
        $savestats->guid = "guid";
        $savestats->time = "test";
        $savestats->redname = "tr";
        $savestats->bluename = "tb";
        $savestats->save();

        //return redirect()->back()->with('message', 'Stats saved');
    }
}
