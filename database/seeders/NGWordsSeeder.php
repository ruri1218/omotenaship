<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NGWord;

class NGWordsSeeder extends Seeder
{
    private $ng_word;

    public function __construct(NGWord $ng_word)
    {
        $this->ng_word = $ng_word;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ng_words = [
            [
                'user_id' => 1,
                'word' => 'fuck',
                'language' => 'en-US',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'user_id' => 1,
                'word' => 'nigger',
                'language' => 'en-US',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'user_id' => 1,
                'word' => 'jap',
                'language' => 'en-US',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'user_id' => 1,
                'word' => 'damn',
                'language' => 'en-US',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'user_id' => 1,
                'word' => 'shit',
                'language' => 'en-US',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
        ];

        $this->ng_word->insert($ng_words);
    }
}
