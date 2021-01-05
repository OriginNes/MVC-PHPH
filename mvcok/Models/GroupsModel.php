<?php
namespace App\Models;

class GroupsModel{
    public function getAllData()
    {
        $studentList = [];
        if (false !== ($handle = fopen("../student_list.csv", "r"))) {
            $key = $data = fgetcsv($handle, 1000, ",");
            while (false !== ($data = fgetcsv($handle, 1000, ","))) {
                $line_assoc = array_combine($key, $data);
                $studentList[] = $line_assoc;
            }
            fclose($handle);
        }

        return $studentList;
    }

}