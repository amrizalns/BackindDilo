<?php

use Illuminate\Database\Seeder;
use App\city;

class list_city_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cities')->delete();
      city::create([
        'id_city'=>'1',
        'city'=>'Bandung',
      ]);
    }
}
