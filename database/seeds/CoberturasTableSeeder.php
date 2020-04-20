<?php

use Illuminate\Database\Seeder;
use App\Entities\Coberturas;

class CoberturasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coberturas')->delete();

        Coberturas::Create([          
            'cobertura' => 'PENSÃO - BENEFÍCIO POR MORTE',
            'indenizacoes' => '150.000150.000',
            'status' => 1          
        ]);
        $this->command->info("Cobertura PENSÃO - BENEFÍCIO POR MORTE cadastrado com sucesso!");

        Coberturas::Create([          
            'cobertura' => 'DIT COM LER E DORT E IPA MAJORADA',
            'indenizacoes' => '150.000',
            'status' => 1          
        ]);
        $this->command->info("Cobertura DIT COM LER E DORT E IPA MAJORADA cadastrado com sucesso!");

        Coberturas::Create([          
            'cobertura' => 'RENDA POR INVALIDEZ',
            'indenizacoes' => '150.000',
            'status' => 1          
        ]);
        $this->command->info("Cobertura RENDA POR INVALIDEZ cadastrado com sucesso!");

        Coberturas::Create([          
            'cobertura' => 'INVALIDEZ TOTAL POR ACIDENTE',
            'indenizacoes' => '150.000',
            'status' => 1          
        ]);
        $this->command->info("Cobertura INVALIDEZ TOTAL POR ACIDENTE cadastrado com sucesso!");


        Coberturas::Create([          
            'cobertura' => 'SEGURO DE ASSISTÊNCIA FUNERAL INDIVIDUAL',
            'indenizacoes' => '150.000',
            'status' => 1          
        ]);
        $this->command->info("Cobertura SEGURO DE ASSISTÊNCIA FUNERAL INDIVIDUAL cadastrado com sucesso!");

        Coberturas::Create([          
            'cobertura' => 'DOENÇAS GRAVES',
            'indenizacoes' => '150.000',
            'status' => 1          
        ]);
        $this->command->info("Cobertura DOENÇAS GRAVES cadastrado com sucesso!");
    }
}
