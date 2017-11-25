<?php

use Illuminate\Database\Seeder;
use App\room_categorys;
class room_category_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_categorys')->delete();
        room_categorys::create([
          'id_room_category'=>'1',
          'category_name'=>'Standart',
        ]);
        room_categorys::create([
          'id_room_category'=>'2',
          'category_name'=>'Superior',
        ]);
        room_categorys::create([
          'id_room_category'=>'3',
          'category_name'=>'Duluxe',
        ]);
        room_categorys::create([
          'id_room_category'=>'4',
          'category_name'=>'Family Room',
        ]);
        room_categorys::create([
          'id_room_category'=>'5',
          'category_name'=>'Suite',
        ]);
    }
}
