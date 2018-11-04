<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job;
use App\contact_information;

class DetailsController extends Controller
{
    public function getJobDetailes($id)
    {
      $job = job::where('id',$id)->firstOrFail();
      $contactInformation = contact_information::where('jobid',$id)->get();
      return view('details',compact('job','contactInformation'));

    }
}
