<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studant;
use File;

class MyPhotoController extends Controller
{
    //
    public function select(){
        return view('layouts.selectphoto');
    }

    public function save(Request $request, $id){
        $photo = $request->file('photo');

        $studant = Studant::find($id);
        $newname = $id."_".sha1($photo->getClientOriginalName()).'.'.$photo->getClientOriginalExtension();
        if($studant == null){
            $studant = new Studant;
        } else {
            //reaproveita o nome do arquivo para não ficar arquivos perdidos
            $newname = $studant->photo;
        }
        $photo->move(public_path('images'),$newname);
        $studant->id_user = $id;
        $studant->photo = $newname;
        $studant->save();
        return redirect()->route('myinfo');
    }
}
