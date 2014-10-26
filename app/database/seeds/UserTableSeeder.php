<?php

class UserTableSeeder extends Seeder {

    public function run() {
        DB::table('users')->delete();
        User::create(array(
            'name' => 'Leon Morris',
            'username' => 'morrisl',
            'email' => 'leon.morris@ouh.nhs.uk',
            'password' => Hash::make('waunarlwydd'),
        ));
    }

}
