<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            ['user_id' => 1,
            'category_id' => 1,
            'title' => 'Mount Semeru',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit venenatis est eget venenatis',
            'image' => 'UAS pic/semeru.jpeg'],

            ['user_id' => 1,
            'category_id' => 1,
            'title' => 'Mount Rinjani',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit venenatis est eget venenatis',
            'image' => 'UAS pic/rinjani.jpeg'],

            ['user_id' => 1,
            'category_id' => 1,
            'title' => 'Mount Batur',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit venenatis est eget venenatis',
            'image' => 'UAS pic/batur.jpeg'],

            ['user_id' => 1,
            'category_id' => 1,
            'title' => 'Mount Gede Pangrango',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit venenatis est eget venenatis',
            'image' => 'UAS pic/pangrango.jpeg'],

            ['user_id' => 1,
            'category_id' => 2,
            'title' => 'Kuta Beach',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit venenatis est eget venenatis',
            'image' => 'UAS pic/kuta.jpeg'],

            ['user_id' => 1,
            'category_id' => 2,
            'title' => 'Tanjung Tinggi Beach',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit venenatis est eget venenatis',
            'image' => 'UAS pic/tj.t.jpeg'],

            ['user_id' => 1,
            'category_id' => 2,
            'title' => 'Melasti Beach',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit venenatis est eget venenatis',
            'image' => 'UAS pic/melasti.jpeg'],

            ['user_id' => 1,
            'category_id' => 2,
            'title' => 'Pulau Merah Beach',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit venenatis est eget venenatis',
            'image' => 'UAS pic/pulaumrh.jpeg'],
        ]);
    }
}
