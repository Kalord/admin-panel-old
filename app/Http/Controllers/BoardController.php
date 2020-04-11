<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Modules\IModuleController;
use App\Module;
use App\Project;

class BoardController extends Controller implements IModuleController
{
    public function index()
    {
        return view('panel/board', [
            'modules'   => Module::all(),
            'projects'  => Project::all()
        ]);
    }
}
