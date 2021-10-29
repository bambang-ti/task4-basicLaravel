<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(){
        echo "Menampilkan data animals";
    }
    public function store(Request $request){
        echo "Menambahkan data animals - $request->nama";
    }
    public function update(Request $request, $id){
        echo "Mengedit data animals id: $id - $request->nama";
    }
    public function destroy($id){
        echo "Menghapus data animals id: $id";
    }
    

}
