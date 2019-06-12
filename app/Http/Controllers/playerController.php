<?php

namespace App\Http\Controllers;

use App\player;
use App\team;
use App\transfer;
use Illuminate\Http\Request;

class playerController extends Controller
{

    public function addPlayer()
    {
        return view('adminPanel.addPlayer');
    }

    public function addUserProduct(Request $request)
    {
        $request->validate([
            'logo' => 'required|max:10240',
            'name' => 'required',

        ]);

        $imageName = time().'.'.$request->logo->getClientOriginalExtension();
        $request->logo->move(public_path('images'), $imageName);

        $player=new player();
        $player->name=$request->name;
        $player->team_id=0;
        $player->image=$imageName;
        $player->save();

        return redirect()->back();
    }

    public function listPlayer()
    {
        $player=player::all();
        $team=team::all();
        return view('adminPanel.listPlayer',compact('player','team'));
}

}
