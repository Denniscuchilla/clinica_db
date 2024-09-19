<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
            'nombre'=>'Zapatos',
            'precio'=>59.99,
            'marca'=>1,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Camisas',
            'precio'=>35.19,
            'marca'=>2,
            'created_at'=>Carbon::now()
        ]);

        DB::table('productos')->insert($data);
    }
}
