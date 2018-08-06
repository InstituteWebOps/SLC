<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	DB::table('documents')->insert([
		'name' => 'The Constitution of SLC',
		'url' => 'TODO: fill.url.to.constitution',
		'date' => \Carbon\Carbon::now()->format('M d, Y'),
		'type' => 'constitution',
	]);
    }
}
