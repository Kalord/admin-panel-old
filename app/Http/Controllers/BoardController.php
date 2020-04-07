<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;
use App\Http\Modules\IModuleController;

class BoardController extends Controller implements IModuleController
{
    public function index()
    {
        return view('panel/board', [
            'modules' => Module::all()
        ]);
    }
}
