<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
            'nombre'=>'Nike',
            'created_at'=>Carbon::now()
        ],[
           'nombre'=>'Pumas',
            'created_at'=>Carbon::now() 
        ], [
            'nombre'=>'Adidas',
            'created_at'=>Carbon::now()
        ]);

        DB::table('marcas')->insert($data);
    }
}
