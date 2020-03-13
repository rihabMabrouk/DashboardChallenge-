<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use App\Challenge;
use Auth;
use DB;
class CommentController extends Controller
{
  public function store(Request $request)
{
    $comment = new Comment;
    $userId = Auth::id();

    $comment->content = $request->get('comment');
    $comment->idWriter  = $userId;
    $user = Auth::user();
    $challenge = Challenge::find($request->get('idChallenge'));
    $comment->roleWriter  = $user->role;
    $comment->challenge_id = $request->get('idChallenge');
    $comment->save();


    return back();
}
public function getNameUserByID($idUser)
{
  echo $idUser;
  $user = User::find($idUser);
  echo $user;
  $userName =  $user->get('name');

  return view('user-challenge-detail',['userName'=> $userName]);
}




}
