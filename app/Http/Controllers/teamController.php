<?php

namespace App\Http\Controllers;

use App\player;
use App\team;
use App\transfer;
use Illuminate\Http\Request;

class teamController extends Controller
{
    public function addTeam()
    {
     return view('adminPanel.addTeam');

    }

    public function addTeamProduct(Request $request)
    {
        $team=new team();
        $team->name=$request->name;
        $team->save();

    }

    public function listTeam()
    {
        $team=team::all();
        return view('adminPanel.listTeam',compact('team'));

    }

    public function transfer($id,$user,Request $request)
    {
       $user=player::where('team_id',0)->where('id',$request->user);


       if ($user->first()) {
           $user->update([
               'team_id' => $request->id
           ]);

       }else{
$playernew=player::where('id',$request->user)->first();
          $player=new player();
          $player->name=$playernew->name;
          $player->image=$playernew->image;
          $player->team_id=$id;
          $player->save();
 return redirect()->back();

       }

    }

}
