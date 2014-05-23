<?php

class ContestsTableSeeder extends Seeder {

	public function run()
	{
		Contest::create([
			'title' => 'Website voor EventManager',
			'category' => 'webdesign',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, pariatur eum perferendis reiciendis temporibus mollitia accusantium sit deserunt blanditiis nihil laboriosam cumque soluta natus accusamus rem quaerat voluptas nostrum aut!',
			'budget' => 2500,
			'user_id' => 1
		]);
	}

}