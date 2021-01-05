<?php

namespace App\Models;

class AddStudent{

    public function NewStudend(){

        $new_ligne = "M.,FORET,BRANDON\n";
        $file = '../student_list.csv';
        $old_lignes = file($file);
        array_push($old_lignes,$new_ligne);
        $new_content = join('',$old_lignes);
        $fp = fopen($file,'w');
        $write = fwrite($fp, $new_content);
        fclose($fp);

    }
}