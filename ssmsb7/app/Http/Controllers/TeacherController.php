<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    private $teacher,$teachers;

    public function index(){
        return view('admin.teacher.index');
    }

    public function manage()
    {
        $this->teachers=Teacher::all();
        return view('admin.teacher.manage',['teachers'=>$this->teachers]);
    }

    public function create(Request $request){
//        return $request->all();
        Teacher::newTeacher($request);
        return redirect('/teacher/add')->with('message','Teacher Info Save Successfully');
    }

    public function edit($id){
        $this->teacher=Teacher::find($id);
        return view('admin.teacher.edit',['teacher'=>$this->teacher]);
    }

    public function update(Request $request,$id)
    {
        Teacher::updateTeacher($request,$id);
        return redirect('/teacher/manage')->with('message',"Teacher Info has updated");
    }
    public function delete($id){
        Teacher::deleteTeacher($id);
        return redirect('/teacher/manage')->with('message',"Teacher Info Delete Successfully");
    }
}
