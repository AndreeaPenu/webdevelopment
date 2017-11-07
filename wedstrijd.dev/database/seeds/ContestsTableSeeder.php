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
                'end'=>Carbon::now()),
            array(
                'start'=>Carbon::now()->addDays(14),
                'end'=>Carbon::now()->addDays(21)),
            array(
                'start'=>Carbon::now()->addDays(28),
                'end'=>Carbon::now()->addDays(35)),
            array(
                'start'=>Carbon::now()->addDays(42),
                'end'=>Carbon::now()->addDays(49))


     /*       array(
                'start'=>Carbon::yesterday(),
                'end'=>Carbon::now())*/
        ));
    }
}
