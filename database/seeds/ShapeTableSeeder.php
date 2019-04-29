<?php

use Illuminate\Database\Seeder;

class ShapeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mountain = new \App\Shape();
        $mountain->name = "Mountain";
        $mountain->shape_id = 1;
        $mountain->current = 1;
        $mountain->save();

        $triangle = new \App\Shape();
        $triangle->name = "Triangle";
        $triangle->shape_id = 2;
        $triangle->current = 0;
        $triangle->save();

        $square = new \App\Shape();
        $square->name = "Square";
        $square->shape_id = 3;
        $square->current = 0;
        $square->save();
    }
}
