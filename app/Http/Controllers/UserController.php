<?php

namespace SerialViewer\Http\Controllers;

use Illuminate\Http\Request;
use SerialViewer\User;

class UserController extends Controller
{
  /**
   * Show one profil.
   *
   *
   */
  public function showOne(Request $request, $id)
  {
      $user = User::find($id);
      $parameters = [
        'user' => $user
      ];
      return view('user.profil',$parameters);

  }

  /**
   * Show one profil.
   *
   *
   */
  public function showFriends(Request $request, $id)
  {
      $user = User::find($id);
      $parameters = [
        'user' => $user
      ];
      return view('user.friends',$parameters);

  }
}
