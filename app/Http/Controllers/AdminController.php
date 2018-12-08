<?php

namespace App\Http\Controllers;

use App\contact_information;
use App\job;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('isA');
    }

    public function index()
    {
        $NumberOfUsers = User::count();
        $NumberOfJobs = job::count();
        $NumberOfViews = job::sum('views');
        return view('AdminViews.adminHome',compact('NumberOfUsers','NumberOfJobs','NumberOfViews'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $user = User::where('id',$id)->firstOrFail();
        return view('AdminViews.userDetails',compact('user'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('userManage');
    }

    public function userManage()
    {
        $users = User::paginate(15);
        return view('AdminViews.userManage',compact('users'));
    }

    public function jobManage()
    {
        $jobs = job::paginate(15);
        return view('AdminViews.jobManage',compact('jobs'));
    }

    public function jobDetails($id)
    {
        $job = job::where('id',$id)->firstOrFail();
        $contactInformation = contact_information::where('jobid',$id)->get();
        return view('AdminViews.jobDetails',compact('job','contactInformation'));
    }

    public function jobReviewing()
    {
        $jobRev = job::where('state',0)->paginate(6);
        return view('AdminViews.jobReviewing')->with('jobRev',$jobRev);
    }

    public function jobAccept ($id)
    {
        $Accept = job::where('id',$id)->firstOrFail();
        $Accept->state = 1;
        $Accept->save();
        return back();
    }

    public function jobDestroy($id)
    {
       $Destroy = job::where('id',$id)->firstOrFail();
       $Destroy->delete();
       return back();
    }

    public function jobSponsored()
    {
        $jobSponsored = job::where('sponsored',1)->paginate(6);
        return view('AdminViews.jobSponsored',compact('jobSponsored'));
    }

    public function jobNotSponsored()
    {
        $jobNotSponsored = job::where('sponsored',0)->paginate(6);
        return view('AdminViews.jobNotSponsored',compact('jobNotSponsored'));
    }

    public function Active($id)
    {
        $Active = job::where('id',$id)->firstOrFail();
        $Active->sponsored = 1;
        $Active->save();
        return back();
    }

    public function DeActive($id)
    {
        $DeActive = job::where('id',$id)->firstOrFail();
        $DeActive->sponsored = 0;
        $DeActive->save();
        return back();
    }

}
