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
        $NumAlumni = DB::table('alumni')->count();
        return view('home', compact('NumAlumni'));
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
    public function getAlumniById($AID)
    {
        $alumni = DB::table('alumni')->where('AID', $AID)->first();
        return view('viewAlumni', compact('alumni'));
    }
    public function editAlumniById($AID)
    {
        $alumni = DB::table('alumni')->where('AID', $AID)->first();
        return view('updateAlumni', compact('alumni'));
    }

    public function updateAlumniById(Request $request)
    {
        DB::table('alumni')->where('AID', $request->AID)->update([
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
        return back()->with('alumni_updated', 'Alumni has been updated Successfully');
    }

    public function deleteAlumniById($AID)
    {
        $alumni = DB::table('alumni')->where('AID', $AID)->delete();
        return back()->with('alumni_deleted', 'Alumni has been deleted Successfully');
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
