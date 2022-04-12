<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;
use Symfony\Contracts\Service\Attribute\Required;

class SoalController extends Controller
{
    public function index() {
        $data = Soal::all();
        return view('matkul.index', compact('data'));
    }

    public function create(){
        return view('matkul.create');
    }

    public function store(Request $request){

        // dd($request->all());
        $this->validate($request, [
            'nama_mk' => 'required|unique:soal',
            'dosen' => 'required|min:5',
            'jumlah_soal' => 'required|numeric',
            'keterangan' => 'required'
        ]);
        Soal::create($request->all());
        return redirect('Soal');
    }

    public function destroy(Soal $id){
        $id->delete();
        return redirect('Soal');
    }
}
