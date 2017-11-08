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
                'start'=>Carbon::parse('2017-10-7 08:23:00.123456'),
                'end' =>Carbon::parse('2017-10-14 22:23:00.123456')),
            array(
                'start'=>Carbon::parse('2017-10-21 08:23:00.123456'),
                'end' =>Carbon::parse('2017-10-28 22:23:00.123456')),
            array(
                'start'=>Carbon::yesterday(),
                'end'=>Carbon::now()),
            array(
                'start'=>Carbon::now()->addDays(7),
                'end'=>Carbon::now()->addDays(14)),


     /*       array(
                'start'=>Carbon::yesterday(),
                'end'=>Carbon::now())*/
        ));
    }
}
