<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function getList()
    {
        $alumni = DB::table('alumni')->get();
        return view('viewList', compact('alumni'));
    }

    public function addAlumni()
    {
        return view('addNew');
    }
    public function getAlumniById($id)
    {
        $alumni = DB::table('alumni')->where('AID', $id)->first();
        return view('single-post', compact('alumni'));
    }

    public function addAlumniSubmit(Request $request)
    {
        DB::table('alumni')->insert([
            'Fname' => $request->Fname,
            'Lname' => $request->Lname,
            'DoB' => $request->DoB,
            'IDNum' => $request->IDNum,
            'Gender' => $request->Gender,
            'Nationality' => $request->Nationality,
            'Email' => $request->Email,
            'Pnumber' => $request->Pnumber,
            'Program' => $request->Program,
            'Faculty' => $request->Faculty,
            'Major' => $request->Major,
            'CreditEarned' => $request->CreditEarned,
            'AdvisorName' => $request->AdvisorName,
            'Minor' => $request->Minor,
            'ResidentialAddress' => $request->ResidentialAddress,
        ]);
        return back()->with('Alumni_Added', 'Alumni has been added successfully!');
    }

}
