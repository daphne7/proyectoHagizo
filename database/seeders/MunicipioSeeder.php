<?php

namespace Database\Seeders;
use App\Models\Municipio;
use Illuminate\Database\Seeder;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*--***********************-POTOSI---ALONZO DE IBAÑEZ 1-----------------------------*/  
         Municipio::create([
            "name" => "SACACA",
            "provincia_id"=> 1
            ]);
          Municipio::create([
            "name" => "CARIPUYO",
            "provincia_id"=> 1
            ]);
      /*--***********************-POTOSI---ANTONIO QUIJARRO 3-----------------------------*/  
          Municipio::create([
            "name" => "UYUNI",
            "provincia_id"=> 2
            ]);
          Municipio::create([
            "name" => "PORCO",
            "provincia_id"=> 2
            ]);
           Municipio::create([
            "name" => "TOMAVE",
            "provincia_id"=> 2
            ]);
           /*--***********************-POTOSI---chacas3-----------------------------*/ 
         Municipio::create([
            "name" => "SAN PEDRO DE BUENA VISTA",
            "provincia_id"=> 3
            ]);
           Municipio::create([
            "name" => "TORO TORO",
            "provincia_id"=> 3
            ]);


         /*--***********************-BENI---CERCADO-----------------------------*/  	
        Municipio::create([
            "name" => "TRINIDAD",
            "provincia_id"=> 17
            ]);
         Municipio::create([
            "name" => "SAN JAVIER",
            "provincia_id"=> 17
            ]);
         /*---BENI---GRAL. J. BALLIVIAN-------*/  
           Municipio::create([
            "name" => "REYES",
            "provincia_id"=> 18
            ]);
           Municipio::create([
            "name" => "RURRENABAQUE",
            "provincia_id"=> 18
            ]);
           Municipio::create([
            "name" => "SAN BORJA",
            "provincia_id"=> 18
            ]);
           Municipio::create([
            "name" => "SANTA ROSA",
            "provincia_id"=> 18
            ]);
          
         /*---BENI---ITENEZ-------*/ 
          Municipio::create([
            "name" => "MAGDALENA",
            "provincia_id"=> 19
            ]);
            Municipio::create([
            "name" => "BAURES",
            "provincia_id"=> 19
            ]);
            Municipio::create([
            "name" => "HUACARAJE",
            "provincia_id"=> 19
            ]);  
         /*---BENI---MAMORE-------*/  
          Municipio::create([
            "name" => "SAN JOAQUÍN",
            "provincia_id"=> 20
            ]);
          Municipio::create([
            "name" => "PUERTO SILES",
            "provincia_id"=> 20
            ]);
          Municipio::create([
            "name" => "SAN RAMÓN",
            "provincia_id"=> 20
            ]); 
         /*---BENI---MARBAN-------*/  
          Municipio::create([
            "name" => "LORETO",
            "provincia_id"=> 21
            ]);
          Municipio::create([
            "name" => "SAN ANDRÉS",
            "provincia_id"=> 21
            ]);
          /*---BENI---MOXOS-------*/ 
          Municipio::create([
            "name" => "SAN IGNACIO",
            "provincia_id"=> 22
            ]);
          /*---BENI---VACA DIEZ-------*/ 
          Municipio::create([
            "name" => "RIBERALTA",
            "provincia_id"=> 23
            ]);
           Municipio::create([
            "name" => "GUAYARAMERÍN",
            "provincia_id"=> 23
            ]);
          /*---BENI---YACUMA-------*/ 
          Municipio::create([
            "name" => "SANTA ANA",
            "provincia_id"=> 24
            ]);
           Municipio::create([
            "name" => "EXALTACIÓN",
            "provincia_id"=> 24
            ]);




           /*////////////////////////oruro///////////////////////////////////////////////////*/
           /********************oruro****AVAROA**********************************/
           Municipio::create([
            "name" => "CHALLAPATA",
            "provincia_id"=> 72
            ]);
            Municipio::create([
            "name" => "SANTUARIO DE QUILLACAS",
            "provincia_id"=> 72
            ]);
           /********************oruro****CARANGAS**********************************/
          Municipio::create([
            "name" => "CORQUE",
            "provincia_id"=> 73
            ]);
          Municipio::create([
            "name" => "CHOQUECOTA",
            "provincia_id"=> 73
            ]);
           /********************oruro****CERCADO**********************************/
          Municipio::create([
            "name" => "ORURO",
            "provincia_id"=> 74
            ]);
          Municipio::create([
            "name" => "CARACOLLO",
            "provincia_id"=> 74
            ]);
          Municipio::create([
            "name" => "EL CHORO",
            "provincia_id"=> 74
            ]);
          Municipio::create([
            "name" => "SORACACHI",
            "provincia_id"=> 74
            ]);
           /********************oruro****LADISLAO CABRERA**********************************/
            Municipio::create([
            "name" => "PAMPA AULLAGAS",
            "provincia_id"=> 75
            ]);
             Municipio::create([
            "name" => "SALINAS DE GARCI MENDOZA",
            "provincia_id"=> 75
            ]);
           /********************oruro****LITORAL**********************************/
          Municipio::create([
            "name" => "HUACHACALLA",
            "provincia_id"=> 76
            ]);
          Municipio::create([
            "name" => "CRUZ DE MACHACAMARCA ",
            "provincia_id"=> 76
            ]);Municipio::create([
            "name" => "ESCARA",
            "provincia_id"=> 76
            ]);Municipio::create([
            "name" => "ESMERALDA",
            "provincia_id"=> 76
            ]);Municipio::create([
            "name" => "YUNGUYO DEL LITORAL ",
            "provincia_id"=> 76
            ]);
            /********************oruro***MEJILLONES**********************************/
          
          Municipio::create([
            "name" => "CARANGAS",
            "provincia_id"=> 77
            ]);
          Municipio::create([
            "name" => "LA RIVERA",
            "provincia_id"=> 77
            ]);
          Municipio::create([
            "name" => "TODOS SANTOS",
            "provincia_id"=> 77
            ]);
           /********************oruro****NOR CARANGAS**********************************/
          Municipio::create([
            "name" => "SANTIAGO DE HUAYLLAMARCA",
            "provincia_id"=> 78
            ]);
           /********************oruro****PANTALEON DALENCE**********************************/
           Municipio::create([  
             "name" => "MACHACAMARCA",
            "provincia_id"=> 79
            ]);
           Municipio::create([
            "name" => "VILLA HUANUNI",
            "provincia_id"=> 79
             ]);
           /********************oruro****POOPO**********************************/
           
           Municipio::create([
            "name" => "ANTEQUERA",
            "provincia_id"=> 80
            ]);
           Municipio::create([
            "name" => "PAZÑA",
            "provincia_id"=> 80
            ]);
           Municipio::create([
            "name" => "VILLA POOPÓ",
            "provincia_id"=> 80
            ]);

          /*********************oruro***SABAYA**********/
           Municipio::create([
            "name" => "SABAYA",
            "provincia_id"=> 81
            ]);
           Municipio::create([
            "name" => "CHIPAYA",
            "provincia_id"=> 81
            ]);
           Municipio::create([
            "name" => "COIPASA",
            "provincia_id"=> 81
            ]);
           /**********************oruro******SAJAMA******/
           Municipio::create([
            "name" => "CURAHUARA DE CARANGAS",
            "provincia_id"=> 82
            ]);
           Municipio::create([
            "name" => "TURCO",
            "provincia_id"=> 82
            ]);
           /*********************oruro***SAN PEDRO DE TOTORA*********/
           Municipio::create([
            "name" => "TOTORA",
            "provincia_id"=> 83
            ]);
           /*********************oruro***SAUCARI**********/
           Municipio::create([
            "name" => "TOLEDO",
            "provincia_id"=> 84
            ]);
           /*********************oruro***SEBASTIAN PAGADOR**********/
           Municipio::create([
            "name" => "SANTIAGO DE HUARI",
            "provincia_id"=> 85
            ]);
           /*********************oruro***SUD CARANGAS**********/
           Municipio::create([
            "name" => "BELÉN DE ANDAMARCA ",
            "provincia_id"=> 86
            ]);
           Municipio::create([
            "name" => "SANTIAGO DE ANDAMARCA",
            "provincia_id"=> 86
            ]);
           /*********************oruro***TOMAS BARRON**********/
           Municipio::create([
            "name" => "EUCALIPTUS",
            "provincia_id"=> 87
            ]);

           /*-----------------SANTA CRUZ-----------------------------------------------*/
           /*---santa cruz-----ANDRES IBAÑEZ --------*/
            Municipio::create([
            "name" => "SANTA CRUZ DE LA SIERRA",
            "provincia_id"=> 94
            ]);
            Municipio::create([
            "name" => "COTOCA ",
            "provincia_id"=> 94
            ]);
            Municipio::create([
            "name" => "EL TORNO",
            "provincia_id"=> 94
            ]);
            Municipio::create([
            "name" => "LA GUARDIA",
            "provincia_id"=> 94
            ]);
            Municipio::create([
            "name" => " PORONGO",
            "provincia_id"=> 94
            ]);
            /*---santa cruz-----ANGEL SANDOVAL --------*/
             Municipio::create([
            "name" => " SAN MATÍAS",
            "provincia_id"=> 95
            ]);
             /*---santa cruz-----CHIQUITOS --------*/
              Municipio::create([
            "name" => "SAN JOSÉ DE CHIQUITOS",
            "provincia_id"=> 96
            ]);
                Municipio::create([
            "name" => "PAILÓN",
            "provincia_id"=> 96
            ]);
                Municipio::create([
            "name" => "ROBORÉ",
            "provincia_id"=> 96
            ]);
              /*---santa cruz-----CORDILLERA --------*/
            Municipio::create([
            "name" => "LAGUNILLAS",
            "provincia_id"=> 97
            ]);
            Municipio::create([
            "name" => "BOYUIBE",
            "provincia_id"=> 97
            ]);
            Municipio::create([
            "name" => "CABEZAS",
            "provincia_id"=> 97
            ]);
             Municipio::create([
            "name" => "CAMIRI ",
            "provincia_id"=> 97
            ]);
            Municipio::create([
            "name" => "CHARAGUA",
            "provincia_id"=> 97
            ]);
            Municipio::create([
            "name" => "CUEVO",
            "provincia_id"=> 97
            ]);
             Municipio::create([
            "name" => "GUTIÉRREZ",
            "provincia_id"=> 97
            ]);
           /*---santa cruz-----FLORIDA --------*/
           Municipio::create([
            "name" => "SAMAIPATA",
            "provincia_id"=> 98
            ]);
            Municipio::create([
            "name" => "MAIRANA",
            "provincia_id"=> 98
            ]);
             Municipio::create([
            "name" => "PAMPA",
            "provincia_id"=> 98
            ]);
              Municipio::create([
            "name" => "QUIRUSILLAS",
            "provincia_id"=> 98
            ]);
            /*---santa cruz-----GERMAN BUSCH --------*/
            Municipio::create([
            "name" => "PUERTO SUÁREZ",
            "provincia_id"=> 99
            ]);
            Municipio::create([
            "name" => "EL CARMEN RIVERO TÓRREZ",
            "provincia_id"=> 99
            ]);
            Municipio::create([
            "name" => "PUERTO QUIJARRO",
            "provincia_id"=> 99
            ]);
             /*---santa cruz-----GUARAYOS --------*/
             Municipio::create([
            "name" => "ASCENSIÓN DE GUARAYOS",
            "provincia_id"=> 100
            ]);
             Municipio::create([
            "name" => "EL PUENTE",
            "provincia_id"=> 100
            ]);
             Municipio::create([
            "name" => "URUBICHÁ",
            "provincia_id"=> 100
            ]);
              /*---santa cruz-----ICHILO--------*/
            Municipio::create([
            "name" => "BUENA VISTA ",
            "provincia_id"=> 101
            ]);
            Municipio::create([
            "name" => "SAN CARLOS",
            "provincia_id"=> 101
            ]);
            Municipio::create([
            "name" => "SAN JUAN DE YAPACANÍ",
            "provincia_id"=> 101
            ]);
            Municipio::create([
            "name" => "YAPACANÍ",
            "provincia_id"=> 101
            ]);
            /*---santa cruz-----MANUEL MARIA CABALLERO --------*/
            Municipio::create([
            "name" => "COMARAPA",
            "provincia_id"=> 102
            ]);
            Municipio::create([
            "name" => "SAIPINA",
            "provincia_id"=> 102
            ]);

             /*---santa cruz-----ÑUFLO DE CHAVEZ    --------*/
            Municipio::create([
            "name" => "CUATRO CAÑADAS",
            "provincia_id"=> 103
            ]);
            Municipio::create([
            "name" => "SAN ANTONIO DEL LOMERÍO",
            "provincia_id"=> 103
            ]);
            Municipio::create([
            "name" => "SAN JULIÁN",
            "provincia_id"=> 103
            ]);
            Municipio::create([
            "name" => "SAN RAMÓN ",
            "provincia_id"=> 103
            ]);
            Municipio::create([
            "name" => "SAN XAVIER",
            "provincia_id"=> 103
            ]);
             /*---santa cruz-----OBISPO SANTISTEVAN --------*/
          Municipio::create([
            "name" => "MONTERO",
            "provincia_id"=> 104
            ]);
          Municipio::create([
            "name" => "GENERAL AGUSTÍN SAAVEDRA ",
            "provincia_id"=> 104
            ]);
          Municipio::create([
            "name" => "MINERO",
            "provincia_id"=> 104
            ]);
          Municipio::create([
            "name" => "FERNÁNDEZ ALONSO",
            "provincia_id"=> 104
            ]);
          Municipio::create([
            "name" => "SAN PEDRO",
            "provincia_id"=> 104
            ]);
           /*---santa cruz-----SARA   --------*/
          Municipio::create([
            "name" => "PORTACHUELO",
            "provincia_id"=> 105
            ]);
           Municipio::create([
            "name" => "COLPA BÉLGICA",
            "provincia_id"=> 105
            ]);
            Municipio::create([
            "name" => "SANTA ROSA DEL SARA",
            "provincia_id"=> 105
            ]);
        
          /*---santa cruz-----VALLEGRANDE --------*/
          Municipio::create([
            "name" => "VALLEGRANDE",
            "provincia_id"=> 106
            ]);
          Municipio::create([
            "name" => "EL TRIGAL",
            "provincia_id"=> 106
            ]);
          Municipio::create([
            "name" => "MORO MORO",
            "provincia_id"=> 106
            ]);
          Municipio::create([
            "name" => "POSTRERVALLE",
            "provincia_id"=> 106
            ]);
          Municipio::create([
            "name" => "PUCARÁ",
            "provincia_id"=> 106
            ]);
          /*---santa cruz-----VELASCO--------*/
         Municipio::create([
            "name" => "SAN IGNACIO DE VELASCO",
            "provincia_id"=> 107
            ]);
          Municipio::create([
            "name" => "SAN MIGUEL DE VELASCO",
            "provincia_id"=> 107
            ]);
           Municipio::create([
            "name" => "SAN RAFAEL DE VELASCO",
            "provincia_id"=> 107
            ]);
        /*---santa cruz-----WARNES-------*/
        Municipio::create([
            "name" => "WARNES",
            "provincia_id"=> 108
            ]);
        Municipio::create([
            "name" => "OKINAWA I",
            "provincia_id"=> 108
            ]);
           /***//////////////////////////////////tarija//////////////////////////////////////////////////*****/

            /*********************tarija***arce******109*/
            Municipio::create([
            "name" => "BERMEJO",
            "provincia_id"=> 109
            ]);
            Municipio::create([
            "name" => "PADCAYA",
            "provincia_id"=> 109
            ]);
            /*********************tarija**aviles**********/
            Municipio::create([
            "name" => "URIONDO",
            "provincia_id"=> 109
            ]);
            Municipio::create([
            "name" => "YUNCHARA",
            "provincia_id"=> 109
            ]);
            /*********************tarija***CERCADO**********/
            Municipio::create([
            "name" => "TARIJA",
            "provincia_id"=> 110
            ]);
    
            /*********************tarija***GRAN CHACO**********/
            Municipio::create([
            "name" => "CARAPARI",
            "provincia_id"=> 111
            ]);
            Municipio::create([
            "name" => "VILLAMONTES",
            "provincia_id"=> 111
            ]);
            Municipio::create([
            "name" => "YACUIBA",
            "provincia_id"=> 111
            ]);
            /*********************tarija***MENDEZ**********/
            Municipio::create([
            "name" => "EL PUENTE",
            "provincia_id"=> 112
            ]);
            Municipio::create([
            "name" => "SAN LORENZO",
            "provincia_id"=> 112
            ]);
            /*********************tarija***O'CONNOR**********/
            Municipio::create([
            "name" => "ENTRE RIOS",
            "provincia_id"=> 113
            ]);


/**////////////////////paise//////////////////////*/

        Municipio::create([
            "name" => "ARGENTINA",
            "provincia_id"=> 114
            ]);
         Municipio::create([  //116
            "name" => "BRASIL",
            "provincia_id"=> 115
            ]);
        Municipio::create([  //117
            "name" => "CHILE",
            "provincia_id"=> 116
            ]);
        Municipio::create([  //118
            "name" => "COLOMBIA",
            "provincia_id"=> 117
            ]);
        Municipio::create([  //119
            "name" => "CUBA",
            "provincia_id"=> 118
            ]);
        Municipio::create([  //120
            "name" => "ECUADOR",
            "provincia_id"=> 119
            ]);
        Municipio::create([  //121
            "name" => "ESPAÑA",
            "provincia_id"=> 120
            ]);
        Municipio::create([  //122
            "name" => "PARAGUAY",
            "provincia_id"=> 121
            ]);
        Municipio::create([  /*18*/ //123
            "name" => "PERU",
            "provincia_id"=> 122
            ]);
        Municipio::create([  /*19*/ //124
            "name" => "URUGUAY",
            "provincia_id"=> 123
            ]);
         Municipio::create([  /*20*/ //125
            "name" => "VENEZUELA",
            "provincia_id"=> 124
            ]);
          Municipio::create([  /*21*/ //126
            "name" => "OTRO",
            "provincia_id"=> 125
            ]);
    }
}
