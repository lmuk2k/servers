<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();

        $this->call('UserTableSeeder');
        $this->call('ServerAppSeeder');

        $this->command->info('Server app seeds finished');
    }

}
