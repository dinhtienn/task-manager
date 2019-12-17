<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public $account;

    public function __construct()
    {
        $this->account = 'manager';
    }

    public function homepage()
    {
        $account = $this->account;
        return view('manager.home', compact('account'));
    }

    public function profile()
    {
        $account = $this->account;
        return view('manager.profile', compact('account'));
    }

    public function listEmployee()
    {
        $account = $this->account;
        return view('manager.list-employee', compact('account'));
    }

    public function job()
    {
        $account = $this->account;
        return view('manager.job', compact('account'));
    }

    public function punish()
    {
        $account = $this->account;
        return view('manager.punish', compact('account'));
    }

    public function kpi()
    {
        $account = $this->account;
        return view('manager.kpi', compact('account'));
    }

    public function employeeProfile()
    {
        $account = $this->account;
        return view('manager.employee-profile', compact('account'));
    }

    public function punishEmployee()
    {
        $account = $this->account;
        return view('manager.punish-employee', compact('account'));
    }

    public function readReport()
    {
        $account = $this->account;
        return view('manager.read-report', compact('account'));
    }

    public function editJob()
    {
        $account = $this->account;
        return view('manager.edit-job', compact('account'));
    }

    public function readDailyReport()
    {
        $account = $this->account;
        return view('manager.read-daily-report', compact('account'));
    }
}
