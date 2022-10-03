<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Course;

class AdminCourseController extends Controller
{
    private $courses, $course, $message, $offerCourses;

    public function manageCourse()
    {
        //$this->courses = Course::all();
        //first(), get(select), all(assending order),take(j koyta bolbo,3 likhle 3 ta) find()
        $this->courses = Course::orderBy('id', 'desc')->take(50)->get();
        return view('admin.course.manage', ['courses' => $this->courses]);
    }

    public function courseDetail($id)
    {
        $this->course = Course::find($id);
        return view('admin.course.detail', ['course' => $this->course]);
    }

    public function updateStatus($id)
    {
        Course::updateCourseStatus($id);
        return redirect('/admin/manage-course')->with('message', $this->message);
    }

    public function manageOffer()
    {
        $this->courses = Course::where('status', 1)->orderBy('id', 'desc')->get();
        $this->offerCourses = Course::where('status', 1)->where('offer_fee', '>', 0)->orderBy('id', 'desc')->get();
        return view('admin.course.manage-offer', [
            'courses' => $this->courses,
            'offer_courses' => $this->offerCourses,
        ]);
    }

    public function createOffer(Request $request)
    {
        Course::newCourseOffer($request);
        return redirect('admin/manage-course-offer')->with('message', 'New course offer created.');
    }

    public function editOffer($id)
    {
        $this->courses = Course::where('status', 1)->orderBy('id', 'desc')->get();
        $this->course = Course::find($id);
        return view('admin.course.edit-offer', [
            'courses' => $this->courses,
            'single_course' => $this->course,
        ]);
    }

    public function updateOffer(Request $request)
    {
        Course::updateOffer($request);
        return redirect('admin/manage-course-offer')->with('message', 'Course Offer Update Successfully.');
    }
}
