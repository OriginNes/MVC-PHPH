<?php
namespace App\Controllers;

use App\Models\GroupsModel;

class GroupsController extends Controller{
    public function index(){
        //get data
        $groupsModel = new GroupsModel;
        $groups = $groupsModel->getAllData();
        //generate view
        $this->render('groups/index', ['groups' => $groups]);
    }

}