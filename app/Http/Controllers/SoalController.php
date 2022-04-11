<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;

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
        Soal::create($request->all());



        return redirect('Soal');
    }
}
