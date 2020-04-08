<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = '_admin_project';

    const SELECTED = 1;

    public function isSelected()
    {
        return $this->selected;
    }

    public function activeSelected()
    {
        $this->selected = self::SELECTED;
        return $this->save();
    }

    public function resetSelected()
    {
        $this->selected = !self::SELECTED;
        return $this->save();
    }

    public static function changeSelectedProject($id_selected)
    {
        $oldSelectedProject = self::where('selected', self::SELECTED)->first();
        $newSelectedProject = self::findOrFail($id_selected);

        if($oldSelectedProject && $oldSelectedProject->id == $id_selected)
        {
            return $oldSelectedProject->resetSelected();
        }

        if($oldSelectedProject && $oldSelectedProject->id != $id_selected)
        {
            $oldSelectedProject->resetSelected();
            return $newSelectedProject->activeSelected();
        }

        if(!$oldSelectedProject)
        {
            return $newSelectedProject->activeSelected();
        }
    }
}
