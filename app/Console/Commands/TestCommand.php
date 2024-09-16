<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Company;
use App\Models\Drug;
use App\Models\Customer;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //create new company in database
        // $new_company= Company::create([
        //     'name'=>'CompanyTes1',
        //     'url'=>'http://company1Test.com',
        //     'path'=>'companytest1.com',
        //     'email'=>'company1Test@gmail.com',
        //     'number'=>'71564876',
        //     'country_code'=>'LB',
        // ]);
        
        //create new drug in database
        // $new_drug= Drug::create([
        //     'name'=>'Strepsils',
        //     'company_id'=>2
        // ]);

        $drugs = Drug::with('company')->first();
        dd($drugs->toArray());
        
        // $company = Company::with('drugs')->first();
        // dd($company->toArray());
        
        // $customer = Customer::find(1);
        // dd($customer->drugs()->get()->toArray());
        
            
        
        dd("done");
    }
}
