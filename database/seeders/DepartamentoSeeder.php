<?php

namespace Database\Seeders;
use App\Models\Departamento;
use App\Models\Paise;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Departamento::create([
            "name" => "POTOSI",  /*1*/
            "paise_id"=> 1
            ]);

        Departamento::create([ /*2*/
            "name" => "BENI",
            "paise_id"=> 1
            ]);
        Departamento::create([    /*3*/
            "name" => "CHUQUISACA",
            "paise_id"=> 1
            ]);

        Departamento::create([
            "name" => "COCHABAMBA",  /*4*/
            "paise_id"=> 1
            ]);

        Departamento::create([ /*5*/
            "name" => "LA PAZ",
            "paise_id"=> 1
            ]);
       Departamento::create([ /*6*/
            "name" => "ORURO",
            "paise_id"=> 1
            ]);

        Departamento::create([ /*7*/
            "name" => "PANDO",
            "paise_id"=> 1
            ]);

        Departamento::create([       /*8*/
            "name" => "SANTA CRUZ",
            "paise_id"=> 1
            ]);
        Departamento::create([  /*9*/
            "name" => "TARIJA",
            "paise_id"=> 1
            ]);


           /*paises*/
        Departamento::create([  /*10*/ //2
            "name" => "ARGENTINA",
            "paise_id"=> 2
            ]); 
        Departamento::create([  /*11*/ //2
            "name" => "BRASIL",
            "paise_id"=> 3
            ]);
        Departamento::create([  /*12*/ //2
            "name" => "CHILE",
            "paise_id"=> 4
            ]);
        Departamento::create([  /*13*/ //2
            "name" => "COLOMBIA",
            "paise_id"=> 5
            ]);
        Departamento::create([  /*14*/ //2
            "name" => "CUBA",
            "paise_id"=> 6
            ]);
        Departamento::create([  /*15*/ //2
            "name" => "ECUADOR",
            "paise_id"=> 7
            ]);
        Departamento::create([  /*16*/ //2
            "name" => "ESPAÑA",
            "paise_id"=> 8
            ]);
        Departamento::create([  /*17*/ //2
            "name" => "PARAGUAY",
            "paise_id"=> 9
            ]);
        Departamento::create([  /*18*/ //2
            "name" => "PERU",
            "paise_id"=> 10
            ]);
        Departamento::create([  /*19*/ //2
            "name" => "URUGUAY",
            "paise_id"=> 11
            ]);
         Departamento::create([  /*20*/ //2
            "name" => "VENEZUELA",
            "paise_id"=> 12
            ]);
          Departamento::create([  /*21*/ //2
            "name" => "OTRO",
            "paise_id"=> 13
            ]);


    }
}
