<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('student.index',compact('student'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'name' => 'required|max:25|min:4',
            'phone' => 'required|unique:students|max:12|min:9',
            'email' => 'required|unique:students',
        ]);

        $student = new Student;
        //Eloquent
        //$student->database table er nam =$request->form er field er nam;
        $student->name =$request->name;
        $student->email =$request->email;
        $student->phone =$request->phone;

        $student->save();
        $notification=array(
            'message'=>'Successfully Student Inserted',
            'alert-type'=>'success'
        );
       return Redirect()->back()->with($notification);
        //return response()->json($student);
    }

    public function show($id)
    {
        //DB::table('students')->where('id',$id)->first();
        //$student=model er nam ::findorfai($id);
        $student=Student::findorfail($id);
        return view('student.viewstudent',compact('student'));
    }

    public function edit($id)
    {
        $student=Student::findorfail($id);
        return view('student.edit',compact('student'));
    }

    public function update(Request $request,$id)
    {
        $student=Student::findorfail($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        
        //DB::table('students')->where('id',$id)->update($student);
        $student->save();
        $notification=array(
            'message'=>'Successfully Student Updated',
            'alert-type'=>'info'
        );
       return Redirect()->route('all.student')->with($notification);
    }

    public function destroy($id)
    {
        //DB::table('students')->where('id',$id)->delete();
        $student=Student::find($id);
        $student->delete();
        $notification=array(
            'message'=>'Successfully Student Deleted',
            'alert-type'=>'success'
        );
       return Redirect()->back()->with($notification);
    }
}
