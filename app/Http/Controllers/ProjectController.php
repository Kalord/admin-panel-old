<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Modules\IModuleController;
use App\Module;
use App\Project;

class ProjectController extends Controller implements IModuleController
{
    public function index()
    {
        return view('panel/project/index', [
            'modules'   => Module::all(),
            'projects'  => Project::all()
        ]);
    }

    public function create()
    {
        return view('panel/project/create', [
            'modules'   => Module::all(),
            'projects'  => Project::all()
        ]);
    }
}
