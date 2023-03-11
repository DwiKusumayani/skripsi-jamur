<?php

namespace App\Http\Controllers;

use App\Models\Jamur;
use App\Models\KendaliAlat;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
class KendaliAlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $items = KendaliAlat::latest()->with('jamur')->get();

            return DataTables::of($items)
                ->addColumn('action', function ($item) {
                    return '
                           <a class="btn-danger btn-sm"  onclick="deleteItem(' . $item->id . ')"><i class="fas fa-trash text-white"></i></span></a> <a class="btn-info btn-sm" href="' . route('kendali-alat.edit',$item->id) . '"><i class="fas fa-pencil-alt text-white    "></i></span></a>';
                })
                ->removeColumn('id')
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('kendali-alat.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['jamur'] = Jamur::orderBy('nama')->get();
        return view('kendali-alat.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new KendaliAlat();
        $item->nama_alat = $request->nama_alat;
        $item->jamur_id = $request->jamur_id;
        $item->tahap_pertumbuhan = $request->tahap_pertumbuhan;
        $item->jam = $request->jam;
        $item->suhu_min = $request->suhu_min;
        $item->suhu_max = $request->suhu_max;
        $item->kelembapan_udara_min = $request->kelembapan_udara_min;
        $item->kelembapan_udara_max = $request->kelembapan_udara_max;
        $item->save();
        return redirect('/kendali-alat')->with('success','Data Berhasil Di Simpan');
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
        $data['item'] = KendaliAlat::where('id',$id)->first();
        $data['jamurs'] = Jamur::orderBy('nama')->get();
        return view('kendali-alat.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = KendaliAlat::where('id',$id)->first();
        $item->nama_alat = $request->nama_alat;
        $item->jamur_id = $request->jamur_id;
        $item->tahap_pertumbuhan = $request->tahap_pertumbuhan;
        $item->jam = $request->jam;
        $item->suhu_min = $request->suhu_min;
        $item->suhu_max = $request->suhu_max;
        $item->kelembapan_udara_min = $request->kelembapan_udara_min;
        $item->kelembapan_udara_max = $request->kelembapan_udara_max;
        $item->save();
        return redirect('/kendali-alat')->with('success','Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = KendaliAlat::where('id',$id)->first();
        $item->delete();
        return response('success');
    }
}
