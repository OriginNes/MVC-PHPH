<?php

namespace App\Models;

class CreateGroupModels extends GroupsModel {

    public function CreateGroups(){
        $nbGroup = $_POST['number'];
        $students = $this->getAllData();
        $nbStudentInGroup = ceil(count($students)/$nbGroup);
        $size = count($students);
        $oneGroup = [];
        $allGroups = [];
        while(0 < count($students)){
            $random = rand(0,$size);
            if(!array_key_exists($random, $students)){
                continue;
            }
            $student = $students[$random];
            $oneGroup[] = $student;
            unset($students[$random]);
            if($nbStudentInGroup == count($oneGroup)){
                $allGroups[] = $oneGroup;
                $oneGroup = [];
            }
        }

        $allGroups[] = $oneGroup;
        return $allGroups;

    }
}