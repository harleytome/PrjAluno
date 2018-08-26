<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Http\Requests\StudantsRequest;
use App\Studant;
use Auth;
use App\User;
use DB;
use Redirect;

class StudantController extends Controller
{
    //
    public function index() {

        $studant = Studant::find(Auth::user()->id);
        $schools = School::all();
        if($studant != null){
            $image = $studant->photo;
        } else {
            $image = "";
        }
        if($studant == null) {
            //Novos dados serão inseridos
           return view('studants.new',compact('schools','image','studant'));
        } else {
            //Alterar dados existentes
           return view('studants.edit',compact('schools','image','studant'));
        }
    }

    public function store(StudantsRequest $request) {
        $validate = $request->validated();

        $c = Studant::find( Auth::user()->id );

        //grava ou atualiza
        if($c == null){
            $studant = new Studant;
            $studant->id_user = Auth::user()->id;
            $studant->id_school = $request->id_school;
            $studant->alias = $request->alias;
            $studant->use_alias = $request->use_alias;
            $studant->birthdate = $request->birthdate;
            $studant->class_name = $request->class_name;
            $studant->current_year = $request->current_year;
            $studant->save();
        } else {
            $c->id_school = $request->id_school;
            $c->alias = $request->alias;
            $c->use_alias = $request->use_alias;
            $c->birthdate = $request->birthdate;
            $c->class_name = $request->class_name;
            $c->current_year = $request->current_year;
            $c->save();
        }
        /*
        Atualiza o email do usuário caso tenha sido alterado
        */
        $email = User::find( Auth::user()->id )->email;
        if($email != $request->email) {
            DB::table('users')
            ->where('id',Auth::user()->id)
            ->update(array('email' => $request->email));
        }
        /*
        Atualiza a senha do usuário caso tenha sido alterada
        */
        if($request->password != "") {
            DB::table('users')
            ->where('id',Auth::user()->id)
            ->update(array('password' => bcrypt($request->password)));
            Auth::logout();
            return Redirect::to('/');
        }
        return Redirect::to('main');
    }

}

