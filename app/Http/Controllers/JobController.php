<?php

namespace App\Http\Controllers;
use App\contact_information;
use App\job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class JobController extends Controller
{

    public function __construct()
    {
        $this->middleware('isBO')->except('showJobs','show');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('JobViews.addjob');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = new job;
        $job->title = $request->input('title');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = job::where('id',$id)->firstOrFail();
        $job->views += 1;
        $job->save();
        $contactInformation = contact_information::where('jobid',$id)->get();
        return view('details',compact('job','contactInformation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job = job::findorFail($id);
        if($request->hasfile('picture') || $request->has('picture'))
        {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('jobsPictures/'), $filename);
            $job->picture = $filename;
            $job->save();

            $job->update($request->except('picture'));
        }
        else
        {
            $job->update($request->except('picture'));
        }
        session()->flash('notif',' This Job Is Updated Now...');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = job::findOrFail($id);
        $job->delete();
        return redirect()->route('jobManage');
    }


    public function showJobs()
    {
        $topsex =job::inRandomOrder()->where('sponsored',1)->where('state',1)->take(6)->get();
        $recentjob = job::orderBy('id','desc')->where('state',1)->take(6)->get();
        $mostviewed = job::orderBy('views','desc')->where('state',1)->take(6)->get();

        return view('home',compact('topsex','recentjob' , 'mostviewed'));
    }


}
