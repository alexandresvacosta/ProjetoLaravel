<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->file( key:'arquivo')->store( path: 'test');
        var_dump($request->file( key: 'arquivo'), $request->all());
    }
}
