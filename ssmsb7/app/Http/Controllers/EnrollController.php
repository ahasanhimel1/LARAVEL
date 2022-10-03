<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;
use Session;
use Mail;
use App\Mail\EnrollConfirmationMail;

class EnrollController extends Controller
{
    private $course, $student, $enroll ,$mailData = [];

    public function index($id)
    {
        $this->course = Course::find($id);
        if(Session::get('student_id'))
        {
            $this->student = Student::find(Session::get('student_id'));
        }
        return view('website.enroll.index', [
            'course' => $this->course,
            'student'=> $this->student
        ]);
    }

    public function enroll(Request $request, $id)
    {
//        return $request->all();
        if (Session::get('student_id'))
        {
            $this->student = Student::find(Session::get('student_id'));
        }
        else
        {
            $this->validate($request,[
                'name'   => 'required',
                'email'  => 'required|unique:students,email',
                'mobile' => 'required|unique:students,mobile'
            ], [
                'name.required' => 'Please Insert Your Name.',
                'email.required' => 'Please Insert Your Email Address.',
                'email.unique' => 'This Email Address Is Already Taken.'
            ]);

            $this->student = Student::newStudent($request);

            Session::put('student_id', $this->student->id);
            Session::put('student_name', $this->student->name);
        }

        $this->enroll = Enroll::where('student_id', Session::get('student_id'))->where('course_id', $id)->first();
        if ($this->enroll)
        {
            return  redirect('/all-courses')->with('message', 'You are already enrolled in this course. Please try another one.');
        }
        else
        {
            Enroll::newEnroll($request, $this->student->id, $id);
            /* Email send */
            $this->mailData = [
                'name' => $this->student->name,
                'user' => $this->student->email,
                'pass' => $this->student->mobile,
                'url' => asset('/login-registration'),
            ];
            Mail::to($this->student->email)->send(new EnrollConfirmationMail($this->mailData));

            return redirect('/enroll-now/'.$id)->with('message', 'Your enroll submission save successfully. Please wait. We will contact with you soon.');

        }

    }
}
