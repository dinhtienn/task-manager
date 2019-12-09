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
        dd($this->account);
    }
}
