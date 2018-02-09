<?php

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'name' => 'Jonas',
            'date' => '1991-02-15',
            'content' => 'Antras komentaras',
            'post_id' => 1
        ]);
    }
}
