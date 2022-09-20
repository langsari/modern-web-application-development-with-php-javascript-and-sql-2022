<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('contacts')->insert([
//            'name'=>'Kholed Langsari',
//            'email'=>'Kholedlangsari@gmail.com'
//    ]);
//
        Contact::factory()->create();
    }
}
