<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CeoController extends Controller
{
    public $account;

    public function __construct()
    {
        $this->account = 'ceo';
    }

    public function homepage()
    {
        dd($this->account);
    }
}
