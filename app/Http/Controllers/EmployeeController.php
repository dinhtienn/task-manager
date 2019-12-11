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
        dd($this->account);
        $account = $this->account;
        return view('employee.home', compact('account'));
    }

    public function job()
    {
        $account = $this->account;
        return view('employee.job', compact('account'));
    }

    public function history()
    {
        $account = $this->account;
        return view('employee.history', compact('account'));
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
}
