<?php

namespace App\Http\Controllers;

use App\job;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('isU');
    }

    public function SearchPanel()
    {
        return view('UserViews.searchPanle');
    }

    public function Search()
    {
        $jobTitle = Input::get('title');
        $Category = Input::get('category');
        $City = Input::get('city');

        if ($jobTitle != "" && $Category != "" && $City != "")
        {
            $search = job::where('title',$jobTitle)->where('category',$Category)->where('city',$City)->where('state',1)->paginate(6);
        }
        else if ($jobTitle != "" && $Category != "")
        {
            $search = job::where('title',$jobTitle)->where('category',$Category)->where('state',1)->paginate(6);
        }
        else if ($jobTitle != "" && $City != "")
        {
            $search = job::where('title',$jobTitle)->where('city',$City)->where('state',1)->paginate(6);
        }
        else if ($Category !="" && $City !="")
        {
            $search = job::where('category',$Category)->where('city',$City)->where('state',1)->paginate(6);
        }
        else if ($Category !="")
        {
            $search = job::where('category',$Category)->where('state',1)->paginate(6);
        }
        else if ($City != "")
        {
            $search = job::where('city',$City)->where('state',1)->paginate(6);
        }
        else if ($jobTitle != "")
        {
            $search = job::where('title',$jobTitle)->where('state',1)->paginate(6);
        }
        else
        {
            $search = null;
        }
        $search->appends ( array (
            'title' => Input::get ( 'title' ),
            'category' => Input::get ( 'category' ),
            'city' => Input::get ( 'city' )
        ) );
        return view('UserViews.search',compact('search'));
    }

}
