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

    public function reportDaily()
    {
        $account = $this->account;
        return view('employee.report-daily', compact('account'));
    }

    public function doneJob()
    {
        $account = $this->account;
        return view('employee.done-job', compact('account'));
    }

    public function editJob()
    {
        $account = $this->account;
        return view('employee.edit-job', compact('account'));
    }

    public function readReport()
    {
        $account = $this->account;
        return view('employee.read-report', compact('account'));
    }
}
