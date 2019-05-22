<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
use App\Student;
use Illuminate\Support\Facades\Input;

class TestController extends Controller
{
    //
    public function showClassroomList(){
    	$classrooms= Classroom::all();
//dd($classrooms);

    	return view('welcome',['classrooms'=>$classrooms]);
    	

    }
 public function showAddClassroom(){
    	    	$classrooms= Classroom::all();

    	return view('classroom.add',['classrooms'=>$classrooms]);

    }
  public function handleAddClassroom(){
  	$data = Input::all();
    	Classroom:: create([
    		'title'=> $data['title'],
    		'photo'=> $data['photo'],
    	]);
    	return back();
    	
    }
    public function showStudent($id){
    	$student= Student::find($id);

    	return view('student.view',['student'=>$student]);
    	
    }
    public function showAddStudent(){
    	$classrooms= Classroom::all();

    	return view('student.add',['classrooms'=>$classrooms]);
    	
    }

    public function handleAddStudent(){
  	$data = Input::all();
    	Student:: create([
    		'email'=> $data['email'],
    		'name'=> $data['name'],
    		'password'=> bcrypt($data['password']),
    		'classroom_id'=> $data['classroom'],
    	]);
    	return back();
    	
    }
    public function handleDeleteStudent($id){
  		$student = Student::find($id);

  		if ($student) {
  		 	$student->delete();
  		 	return 'Successfuly Delete';
  		 } else {
  		 	return 'Erreur';
  		 }
    	
    	
    }

}
