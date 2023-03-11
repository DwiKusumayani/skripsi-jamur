<?php

namespace App\Http\Controllers;

use App\Models\Jamur;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
class JamurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $items = Jamur::latest()->get();

            return DataTables::of($items)
                ->addColumn('action', function ($item) {
                    return '
                           <a class="btn-danger btn-sm"  onclick="deleteItem(' . $item->id . ')"><i class="fas fa-trash text-white"></i></span></a> <a class="btn-info btn-sm" href="' . route('jamur.edit',$item->id) . '"><i class="fas fa-pencil-alt text-white    "></i></span></a>';
                })
                ->removeColumn('id')
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('jamur.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jamur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Jamur();
        $item->nama = $request->nama;
        $item->tahap_pertumbuhan = $request->tahap_pertumbuhan;
        $item->tanggal_tanam = $request->tanggal;
        $item->save();
        return redirect('/jamur')->with('success','Data Berhasil Di Simpan');
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
        $data['item'] = Jamur::where('id',$id)->first();
        return view('jamur.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Jamur::where('id',$id)->first();
        $item->nama = $request->nama;
        $item->tahap_pertumbuhan = $request->tahap_pertumbuhan;
        $item->tanggal_tanam = $request->tanggal;
        $item->save();
        return redirect('/jamur')->with('success','Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Jamur::where('id',$id)->first();
        $item->delete();
        return response('success');
    }
}
