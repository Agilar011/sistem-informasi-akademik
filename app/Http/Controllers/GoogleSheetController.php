<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sheets;

class GoogleSheetController extends Controller
{
    public function index()
    {
        $values = Sheets::spreadsheet('1dJm2Xkl9BffZzOhoGSxJ6jYXayko2W1I3KBh2Zv4FPI')->sheet('Sheet1')->get();

        $header = $rows->pull(0);
        $values = Sheets::collection($header,$rows);
        $values->toArray();

        dd($values);

    }
}
