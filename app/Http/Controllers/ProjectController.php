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
        return view('panel/project', [
            'modules' => Module::all(),
            'projects' => Project::all()
        ]);
    }
}
