<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataTable;
use App\Models\Aranka;
use Illuminate\Support\Facades\DB;

class ArankaController extends Controller
{
    public function index(){
        $data = Aranka::all();
        return view('arankas',  compact('data'));
    }
    public function tambahData(){
        return view('tambahData');
    }
    public function insert(Request $request){
        Aranka::create($request->all());
        return redirect()->route('arankas')->with('success', 'Data Berhasil di Tambahkan');
    }
    public function tampildata($id){
        $data = Aranka::find($id);

        return view('editData', compact('data'));
    }
    public function updatedata(Request $request, $id){
        $data = Aranka::find($id);
        $data->update($request->all());
        return redirect()->route('arankas')->with('success', 'Data Berhasil di Ubah');
    }
    public function deletedata($id){
        $data = Aranka::find($id);
        $data->delete();

        return redirect()->route('arankas')->with('success', 'Data Berhasil di Hapus');
    }
    public function chartDataTable(){
        $data = DataTable::all();
        return view('chartDataTable',  compact('data'));
    }
    public function periodes(Request $request){
        $periodes = $request->periodes;
        // $periodes = $request->$periodes;

        $data = DataTable::whereDate('datetime', $periodes)->get();

        return view('chartDataTable',  compact('data'));
    }
    public function periode(Request $request){

        $data = DataTable::all();
        return view('chartDataTable',  compact('data'));
    }
}
