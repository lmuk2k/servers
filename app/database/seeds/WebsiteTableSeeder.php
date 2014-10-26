<?php

class WebsiteTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('websites')->delete();
		Website::create(array(
			'name'      => 'OUH',
			'full_name' => 'Oxford University Hospitals NHS Trust',
			'url'       => 'http://www.ouh.nhs.uk',
			'production'  => 1,
                        'language'  => '.NET',
                        'cms'       => 'Contribute'
		));
	}

}