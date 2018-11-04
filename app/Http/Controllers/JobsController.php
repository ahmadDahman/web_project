<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class JobsController extends Controller
{

  public function __construct(){
    $this->middleware('isBO')->except('showJobs');
  }

  public function showJobs()
  {
    $topsex =job::inRandomOrder()->where('sponsored',1)->take(6)->get();
    $recentjob = job::orderBy('id','desc')->take(6)->get();


    return view('home',compact('topsex','recentjob'));
  }

  public function AddJob()
  {
    return view('addjob');
  }

  public function AddNewJob(Request $request)
  {
        $job = new job;
        $job->title = $request->input('title'); //Input::get('title');
        $job->company_name = $request->input('company_name');
        $job->description = $request->input('description');
        $job->category = $request->input('category');
        $job->address = $request->input('address');
        $job->street = $request->input('street');
        $job->city = $request->input('city');
        $job->requirements = $request->input('requirements');
        $job->salary = $request->input('salary');
        $job->userid = Auth::user()->id;

          if($request->hasfile('picture'))
          {
              $file = $request->file('picture');
              $extension = $file->getClientOriginalExtension();
              $filename = time() . '.' . $extension;
              $file->move(public_path('jobsPictures/'), $filename);
              $job->picture = $filename;
          }
      $job->save();

        return view('addjobdone');
  }

}
