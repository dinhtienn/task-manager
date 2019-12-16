<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public $account;

    public function __construct()
    {
        $this->account = 'employee';
    }

    public function homepage()
    {
        $account = $this->account;
        return view('employee.home', compact('account'));
    }

    public function profile()
    {
        $account = $this->account;
        return view('employee.profile', compact('account'));
    }

    public function job()
    {
        $account = $this->account;
        return view('employee.job', compact('account'));
    }

    public function punish()
    {
        $account = $this->account;
        return view('employee.punish', compact('account'));
    }

    public function kpi()
    {
        $account = $this->account;
        return view('employee.kpi', compact('account'));
    }

    public function checkin()
    {
        $account = $this->account;
        return view('employee.checkin', compact('account'));
    }

    public function salary()
    {
        $account = $this->account;
        return view('employee.salary', compact('account'));
    }
}
