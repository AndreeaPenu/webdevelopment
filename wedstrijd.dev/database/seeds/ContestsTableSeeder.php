<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ContestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contests')->delete();

        DB::table('contests')->insert(array(

            array(
                'start'=>Carbon::yesterday(),
                'end'=>Carbon::now()->addHour(3)),
            array(
                'start'=>Carbon::now()->addDays(7),
                'end'=>Carbon::now()->addDays(14)),
            array(
                'start'=>Carbon::now()->addDays(21),
                'end'=>Carbon::now()->addDays(28)),
            array(
                'start'=>Carbon::now()->addDays(35),
                'end'=>Carbon::now()->addDays(42)),
     /*       array(
                'start'=>Carbon::yesterday(),
                'end'=>Carbon::now())*/
        ));
    }
}
