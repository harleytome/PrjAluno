<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Studant;
use App\School;
use App\Classes;
use App\Http\Requests\ClassesRequest;
use Redirect;

class ClassesController extends Controller
{
    //

    public function index() {
        $user_id = Auth::user()->id;
        $school_id = Studant::find($user_id)->id_school;
        if($school_id ==null) {
            $school_name="";
        } else {
            $school_name = School::find($school_id)->name;
        }
        $myclasses = Classes::where('id_user',$user_id)->orderBy('name')->paginate(8); //->get();

        return view('classes.index', compact('user_id','school_id','school_name','myclasses'));
    }

    public function add() {
        return view('classes.add');
    }

    public function store(ClassesRequest $request) {
       $validate = $request->validated();
       $newClass = new Classes;
       $newClass->id_user = Auth::user()->id;
       $newClass->id_school = Studant::find(Auth::user()->id)->id_school;
       $newClass->name = strtoupper($request->name);
       $newClass->teacher = $request->teacher;
       $newClass->save();
       return Redirect::to("myclasses");
    }

    public function delete($id){
        $myclasses = Classes::findOrFail($id);
        $myclasses->delete();
        return Redirect::to("myclasses");
    }
    public function edit($id){
        $myclasses = Classes::findOrFail($id);
        //dd($myclasses);
        return view('classes.edit',compact('myclasses'));
    }

    public function update(ClassesRequest $request,$id) {
        $myclassData = $request->all();
        $myclasses = Classes::findOrFail($id);
        $myclasses->update($myclassData);
        return Redirect::to("myclasses");
    }

}
