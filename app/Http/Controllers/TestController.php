<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{
    public function index()
    {
        dd('test');

        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);

        $whereTxt = Test::where('text', '=', 'test')->get();

        $qb = DB::table('tests')->where('text', '=', 'test!')
            ->select('id', 'text')
            ->get();

        dd($values, $count, $first, $whereTxt, $qb);

        return view('tests.test', compact('values'));
    }
}