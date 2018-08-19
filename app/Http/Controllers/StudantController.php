<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Http\Requests\StudantsRequest;
use App\Studant;
use Auth;

class StudantController extends Controller
{
    //
    public function index() {

        $studant = Studant::find(Auth::user()->id);
        if($studant != null){
            $image = $studant->photo;
            $f = true;
        } else {
            $image = "";
            $f = false;
        }

        $schools = School::all();
        return view('studants.info',compact('schools','image','studant','f'));
    }

    public function store(StudantsRequest $request) {
        $validate = $request->validated();

        $c = Studant::find( Auth::user()->id );
        $studant = new Studant;
        $studant->id_user = Auth::user()->id;
        $studant->id_school = $request->id_school;
        $studant->alias = $request->alias;
        $studant->use_alias = $request->use_alias;
        $studant->birthdate = $request->birthdate;
        $studant->class_name = $request->class_name;
        $studant->current_year = $request->current_year;

        //grava ou atualiza
        if($c == null){
            $studant->save();
        } else {
            $c->update($studant);
        }

        //altera a senha caso tenha sido informado
        dd($studant);
    }

}

