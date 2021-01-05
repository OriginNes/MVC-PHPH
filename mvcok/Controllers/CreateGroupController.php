<?php

namespace App\Controllers;

use App\Models\CreateGroupModels;
use App\Models\GroupsModel;

class CreateGroupController extends Controller
{

    public function CreateGroup()
    {
        $models = new CreateGroupModels();
        $group = $models->CreateGroups();

        $hMGroup = count($group);
        foreach ($group as $value):
            $this->render('groups/CreateGroup', ['group' => $value, 'size' => $hMGroup, 'student' => $group]);
        endforeach;


    }
}