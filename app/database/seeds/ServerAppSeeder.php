<?php

class ServerAppSeeder extends Seeder {

    public function run() {

        // clear our database ------------------------------------------
        DB::table('servers')->delete();
        DB::table('websites')->delete();
        DB::table('urls')->delete();

        // seed our servers table -----------------------

        $server6Degrees = Server::create(array(
                    'name' => '6Degrees'
        ));
        $serverOXNETWEBAPP01 = Server::create(array(
                    'name' => 'OXNETWEBAPP01'
        ));
        $serverOXNETCMS = Server::create(array(
                    'name' => 'OXNETCMS'
        ));

        $this->command->info('Servers created');

        // seed our websites table ------------------------
        // we will use the variables we used to create the servers to get their id
        $websiteOUH = Website::create(array(
            'name' => 'OUH',
            'full_name' => 'Oxford University Hospitals NHS Trust',
            'url' => 'http://www.ouh.nhs.uk',
            'production' => 1,
            'server_id' => $server6Degrees->id
        ));
        $websiteOCCG = Website::create(array(
            'name' => 'OCCG',
            'full_name' => 'Oxford Clinical Commissioning Group',
            'url' => 'http://www.occg.nhs.uk',
            'production' => 1,
            'server_id' => $server6Degrees->id
        ));
        $websiteEVCF = Website::create(array(
            'name' => 'EVCF',
            'full_name' => 'Electronic Vacancy Control System',
            'url' => 'https://evcf.oxnet.nhs.uk',
            'production' => 1,
            'server_id' => $serverOXNETWEBAPP01->id
        ));

        $this->command->info('Websites created');
        
        $urlOUH = Website::create(array(
            'address' => 'http://www.ouh.nhs.uk',
            'server_id' => $websiteOCCG->id
        ));
        
        $urlOCCG = Website::create(array(
            'address' => 'http://www.occg.nhs.uk',
            'server_id' => $websiteOCCG->id
        ));

        $urlEVCF = Website::create(array(
            'address' => 'https://evcf.oxnet.nhs.uk',
            'server_id' => $websiteEVCF->id
        ));
    }

}
