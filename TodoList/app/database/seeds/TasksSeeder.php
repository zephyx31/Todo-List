<?php
class TasksSeeder extends Seeder {
 
	public function run()
	{
		
		$tasks = array(	['name' => 'Commit Github ',
		 'slug' => 'Task1',
		  'created_at' => new DateTime,
		   'updated_at' => new DateTime],	
		   ['name' => 'Table Create',
		   'slug' => 'Task2', 
		   'created_at' => new DateTime, 
		   'updated_at' => new DateTime],);			
		 
	
		DB::table('tasks')->insert($tasks);	}
 
}
 ?>