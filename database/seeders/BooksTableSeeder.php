<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        // get all valid users
        $users = User::all()->pluck('id')->toArray();

        // insert data to books table
        DB::table('books')->insert([
            [
                'author_id' => 1,
                'comment' => 'comment1',
                'title' => 'book1',
            ],
            [
                'author_id' => 2,
                'comment' => 'comment2',
                'title' => 'book2',
            ],
            [
                'author_id' => 3,
                'comment' => 'comment3',
                'title' => 'book3',
            ],
        ]);
    }
}