<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($title)
    {
    	echo $title;
        DB::table('posts')->insert([
        	'title' => 'My blog post',
        	'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat blanditiis sequi nihil voluptate eos cumque assumenda excepturi vitae quos officiis recusandae error quo nulla dolorum doloremque sed, repudiandae est,',
        	'date' => '2017.08.08'
        ]);
    }
}
}
