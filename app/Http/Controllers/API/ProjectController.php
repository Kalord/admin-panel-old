<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    /**
     * Изменение текущего выбраного проекта
     * @method PATCH
     **/
    public function changeSelectedProject(Request $request)
    {
        $id_selected = $request->input('id_selected');
        return Project::changeSelectedProject($id_selected);
    }
}
