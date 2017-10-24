<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$article = array (
							array(
							'title' => 'Book',
							'body' => '2500'
							)
		
		);
		DB::table('articles')->insert($article);
		
		for ($i = 0; $i < 50; $i++) {
            $article = array (
							array(
							'title' => 'Book',
							'body' => '2500'
							)
							
							
		
		);
		DB::table('articles')->insert($article);
            
		}

       
    }
}
