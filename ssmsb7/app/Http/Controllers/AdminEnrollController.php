<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;
use function Symfony\Component\Mime\Header\get;

class AdminEnrollController extends Controller
{
    private $enrolls;

    public function index()
    {
        $this->enrolls = Enroll::orderBy('id', 'desc')->get();

        return view('admin.enroll.index', ['enrolls' => $this->enrolls]);
    }

    public function update($id)
    {
        Enroll::updateEnrollStatus($id);
        return redirect()->back()->with('message', 'Enroll status info updated successfully');
    }
}
