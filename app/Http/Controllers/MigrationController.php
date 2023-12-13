<?php

namespace App\Http\Controllers;

use App\Models\Migration;
use Illuminate\Http\Request;

class MigrationController extends Controller
{
    public static function fetch(){
        $migrations = Migration::get()->toArray();
        $array = [];
        foreach($migrations as $migration){
            $array[$migration['id']] = $migration['migration'];
        }
        dd($array);
    }

    public static function create(){
        $migration = new Migration();
        $migration->migration = "06_08_Birthday";
        $migration->batch = 1;
        $migration->save();
        self::fetch();

    }

    public static function update(){
        $migrations = Migration::where('id',6)
                        ->first();

        $migrations->migration = "23-03_Sis_Birthday";
        $migrations->update();
        self::fetch();
    }

    public static function delete(){
        $migrations = Migration::where('id',5)
            ->first();

        $migrations->delete();
        dump("Record 5 deleted successfully");
        self::fetch();

    }

}
