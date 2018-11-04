<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job;
use Illuminate\Support\Facades\Auth;

class BusinessOwnersController extends Controller
{
  public function __construct(){
    $this->middleware('isBO');
  }


    public function JobOffering()
    {
      $userid = Auth::id();
      $offering = job::where('userid',$userid)->firstOrFail();
      return view('myannouncements')->with('offering',$offering);
    }
}
