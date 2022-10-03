<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use App\Models\Course;
use Session;

class CourseController extends Controller
{
    private $courses, $course;

    public function index()
    {
        return view('teacher.course.index');
    }

    public function manage()
    {
        $this->courses =Course::where('teacher_id', Session::get('teacher_id'))->get();
        return view('teacher.course.manage', ['courses' => $this->courses]);
    }

    public function create(Request $request)
    {
        Course::newCourse($request);
        return redirect('/course/add')->with('message', 'Course info create successfully.');
    }

    public function detail($id)
    {
        $this->course = Course::find($id);
        return view('teacher.course.detail', ['course' => $this->course]);
    }

    public function edit($id)
    {
        $this->course = Course::find($id);
        return view('teacher.course.edit', ['course' => $this->course]);
    }

    public function delete($id)
    {
        Course::deleteCourse($id);
        return redirect('/course/manage')->with('message',"Course info deleted successfully");
    }

    public function update(Request $request, $id)
    {

        Course::updateCourse($request,$id);
        return redirect('/course/manage')->with('message',"Course Info has updated");
    }
}
