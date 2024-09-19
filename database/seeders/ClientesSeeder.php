<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClientesSeeder extends Seeder
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
            'categoria'=>1,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'juan',
            'edad'=>33.0,
            'categoria'=>2,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'jose',
            'edad'=>20.0,
            'categoria'=>3,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'armando',
            'edad'=>21.0,
            'categoria'=>4,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'maria',
            'edad'=>40.0,
            'categoria'=>5,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'tatiana',
            'edad'=>23.0,
            'categoria'=>6,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'julissa',
            'edad'=>24.0,
            'categoria'=>7,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'griselda',
            'edad'=>19.0,
            'categoria'=>8,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'melissa',
            'edad'=>16.0,
            'categoria'=>9,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'nelson',
            'edad'=>18,
            'categoria'=>10,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'antonio',
            'edad'=>17,
            'categoria'=>11,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'danelis',
            'edad'=>15,
            'categoria'=>12,
            'created_at'=>Carbon::now()
        ]);
        DB::table('clientes')->insert($data);
    }
}