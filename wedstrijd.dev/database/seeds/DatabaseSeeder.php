<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ContestsTableSeeder::class);


        DB::table('roles')->delete();

        DB::table('roles')->insert(array(

            array(
                'name'=>'admin'),
            array(
                'name'=>'author'),

        ));
    }
}
