<?php

namespace App\Http\Controllers;

use App\Models\Jamur;
use App\Models\MonitoringJamur;

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
        $data['jamur'] = Jamur::orderBy('nama')->get();
        return view('home', $data);
    }

    public function getDataJamur($id)
    {

        $jamur = Jamur::where('id', $id)->first();
        return $jamur;
    }

    public function getDataSuhuDanKelembapan($id)
    {
        $data = MonitoringJamur::where('jamur_id', $id)->orderByDesc('created_at')->first();
        return $data;
    }

    public function gantiStatusAlat($id,$alat,$status){
        $jamur = Jamur::where('id', $id)->first();
        $jamur["status_$alat"] = $status;
        $jamur->save();
        return $jamur;
    }
}
