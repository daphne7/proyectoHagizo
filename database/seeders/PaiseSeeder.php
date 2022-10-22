<?php

namespace Database\Seeders;
use App\Models\Paise;
use Illuminate\Database\Seeder;

class PaiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Paise::create([
            "name" => "BOLIVIA"
            ]);

        Paise::create([
            "name" => "ARGENTINA" //2
            ]);
        Paise::create([
            "name" => "BRASIL" //3
            ]);

        Paise::create([
            "name" => "CHILE" //4 
            ]);

        Paise::create([
            "name" => "COLOMBIA"  //5
            ]);
        Paise::create([
            "name" => "CUBA"  //6
            ]);

         Paise::create([
            "name" => "ECUADOR"  //7
            ]);

        Paise::create([
            "name" => "ESPAÑA" //8
            ]);
        Paise::create([
            "name" => "PARAGUAY" //9
            ]);
        Paise::create([
            "name" => "PERU" //10
            ]);

        Paise::create([
            "name" => "URUGUAY"  //11
            ]);
        Paise::create([
            "name" => "VENEZUELA" //12
            ]);
        Paise::create([
            "name" => "OTRO"  //13
            ]);
    }
}
