<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 2,
                'acct_name' => 'grabii',
                'init_invest' => 80000,
                'start_date' => '2020-02-10',
                'remarks' => 'fixer'
            ],
            [
                'user_id' => 1,
                'acct_name' => 'hentai',
                'init_invest' => 22000,
                'start_date' => '2021-10-01',
                'remarks' => 'fixer'
            ]
        ];
        foreach($data as $acc){
            \App\Account::create($acc);
        }
    }
    
}
