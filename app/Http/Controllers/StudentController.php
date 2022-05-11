<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getCreatePage(){
        return view('create');
    }

    public function createStudent(Request $request){
        Student::create([
            'name' => $request->name,
            'tanggal_lahir' => $request->tanggal_lahir,
            'NIM' => $request->NIM,
            'jurusan' => $request->jurusan,
        ]);

        return redirect(route('getCreatePage'));
    }

    public function getStudents(){
        $students = Student::all();
        return view('view', ['students' => $students]);
    }

    public function getStudentById($id){
        $student = Student::find($id);
        return view('update', ['student' => $student]);
    }

    public function updateStudent(Request $request, $id){
        $student = Student::find($id);

        $student->name = $request->name;
        $student->tanggal_lahir = $request->tanggal_lahir;
        $student->NIM = $request->NIM;
        $student->jurusan = $request->jurusan;

        $student->save();

        return redirect(route('getStudents'));
    }

    public function deleteStudent($id){
        Student::destroy($id);
        return redirect(route('getStudents'));
    }
}
