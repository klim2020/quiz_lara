<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

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
            'name'=>'1st article',
            'text'=> <<<EOT
<h1>Hello World Article</h1>
<p>this is my 1st article</p>
EOT,
            'shortText'=>'my 1st article'

        ]);//
    }
}
