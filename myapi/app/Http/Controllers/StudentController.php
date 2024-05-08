<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Resources\StudentResource;

class StudentController extends Controller
{
     public function index()
     {
        $students=student::paginate(10);
        return StudentResource::collection($student);
     }
     public function store(request $request)
     {
        $student=new student();
        $student->name=$request->name;
        $student->marks=$request->marks;

     }
}
