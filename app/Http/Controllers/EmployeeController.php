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
    }
}
