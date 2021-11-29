<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Book
        Book::create([
            'category_id' => 1,
            'title' => 'Someone Who Knows'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'UN Sekolah Dasar'
        ]);
        Book::create([
            'category_id' => 3,
            'title' => 'Getting Started With React'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'National Geographic Wkwk',
        ]);
        Book::create([
            'category_id' => 3,
            'title' => 'Pusing Ngoding'
        ]);
        Book::create([
            'category_id' => 1,
            'title' => 'Harry Potter Halilintar'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'Bumi Jajargenjang'
        ]);
        Book::create([
            'category_id' => 3,
            'title' => 'Cara Benerin Printer Di Kantor (Ampuh Maning!!!)'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'Mekanisme Turunnya Hujan Salju Di Ciputat',
        ]);
        Book::create([
            'category_id' => 3,
            'title' => 'Cara Benerin Sinyal Wifi Tanpa Harus Restart Modem'
        ]);
    }
}
