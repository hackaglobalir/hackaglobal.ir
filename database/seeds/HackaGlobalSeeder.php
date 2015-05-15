<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class HackaGlobalSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//echo "mysql -u ".\Config::get('database.connections.mysql.username')." -p".\Config::get('database.connections.mysql.password')." ".\Config::get('database.connections.mysql.database')." < \"".storage_path('databaseseed')."\\db.sql\"\n";
		exec("mysql -u ".\Config::get('database.connections.mysql.username')." -p".\Config::get('database.connections.mysql.password')." ".\Config::get('database.connections.mysql.database')." < \"".storage_path('databaseseed')."\\db.sql\"");
	}

}
