<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
            'nombre'=>'pedro',
            'edad'=>30.0,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'juan',
            'edad'=>33.0,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'jose',
            'edad'=>20.0,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'armando',
            'edad'=>21.0,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'maria',
            'edad'=>40.0,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'tatiana',
            'edad'=>23.0,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'julissa',
            'edad'=>24.0,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'griselda',
            'edad'=>19.0,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'melissa',
            'edad'=>16.0,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'nelson',
            'edad'=>18.0,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'antonio',
            'edad'=>17.0,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'danelis',
            'edad'=>15.0,
            'created_at'=>Carbon::now()
        ]);

        DB::table('categorias')->insert($data);
    }

}

