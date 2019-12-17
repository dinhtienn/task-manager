<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CeoController extends Controller
{
    public $account;

    public function __construct()
    {
        $this->account = 'ceo';
    }

    public function homepage()
    {
        return Redirect::to('https://dinhtienn.github.io/nhom1-hci/CEO_Step/CEO_Homepage.html');
    }
}
