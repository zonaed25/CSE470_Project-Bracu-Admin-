<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function proctor()
    {
        return view('student.office.proctor');
    }

    public function hr()
    {
        return view('student.office.hr');
    }

    public function admission()
    {
        return view('student.office.admission');
    }

    public function shebrec()
    {
        return view('student.office.shebrec');
    }

    public function finance()
    {
        return view('student.office.finance');
    }

    public function oca()
    {
        return view('student.office.oca');
    }

    public function register()
    {
        return view('student.office.register');
    }

    public function examController()
    {
        return view('student.office.exam_controller');
    }
}
