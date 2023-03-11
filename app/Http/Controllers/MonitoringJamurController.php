<?php

namespace App\Http\Controllers;

use App\Models\Jamur;
use App\Models\MonitoringJamur;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
class MonitoringJamurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            if($request->filter == 'Semua Jamur'){
                $items = MonitoringJamur::latest()->with('jamur')->get();

            }else{
                $filter = $request->filter;
                $items = MonitoringJamur::latest()->whereHas('jamur',function($q) use ($filter){
                     $q->where('id',$filter);
                })->with('jamur')->get();
            }

            return DataTables::of($items)
                ->addColumn('action', function ($item) {
                    return '
                           <a class="btn-danger btn-sm"  onclick="deleteItem(' . $item->id . ')"><i class="fas fa-trash text-white"></i></span></a>';
                })
                ->editColumn('suhu',function($item){
                    return $item->suhu . ' &deg;C';
                })
                ->editColumn('kelembapan_udara',function($item){
                    return $item->kelembapan_udara . '%';
                })
                ->editColumn('status_kipas',function($item){
                    if($item->status_kipas==1){
                        $message = 'Aktif';
                        $status = 'success';
                    }else{
                        $message = 'Non Aktif';
                        $status = 'secondary';
                    }
                    return "<span class='badge badge-$status'>$message</span>";
                })
                ->editColumn('status_mist_maker',function($item){
                    if($item->status_mist_maker==1){
                        $message = 'Aktif';
                        $status = 'success';
                    }else{
                        $message = 'Non Aktif';
                        $status = 'secondary';
                    }
                    return "<span class='badge badge-$status'>$message</span>";
                })
                ->editColumn('status_tirai',function($item){
                    if($item->status_tirai==1){
                        $message = 'Aktif';
                        $status = 'success';
                    }else{
                        $message = 'Non Aktif';
                        $status = 'secondary';
                    }
                    return "<span class='badge badge-$status'>$message</span>";
                })
                ->editColumn('status_lampu',function($item){
                    if($item->status_lampu==1){
                        $message = 'Aktif';
                        $status = 'success';
                    }else{
                        $message = 'Non Aktif';
                        $status = 'secondary';
                    }
                    return "<span class='badge badge-$status'>$message</span>";
                })
                ->removeColumn('id')
                ->addIndexColumn()
                ->rawColumns(['action','suhu','status_kipas','status_mist_maker','status_tirai','status_lampu'])
                ->make(true);
        }
        $data['jamur'] = Jamur::orderBy('nama')->get();
        return view('monitoringJamur.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('monitoringJamur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new MonitoringJamur();
        $item->nama = $request->nama;
        $item->tanggal_tanam = $request->tanggal;
        $item->save();
        return redirect('/monitoring-jamur')->with('success','Data Berhasil Di Simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['jamurs'] = Jamur::orderBy('nama')->get();
        $data['item'] = MonitoringJamur::where('id',$id)->first();
        return view('monitoringJamur.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = MonitoringJamur::where('id',$id)->first();
        $item->nama = $request->nama;
        $item->tanggal_tanam = $request->tanggal;
        $item->save();
        return redirect('/monitoring-jamur')->with('success','Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = MonitoringJamur::where('id',$id)->first();
        $item->delete();
        return response('success');
    }
}
