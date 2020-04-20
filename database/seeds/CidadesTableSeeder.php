<?php

use Illuminate\Database\Seeder;
use App\Entities\Cidades;

class CidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cidades')->delete();

        Cidades::Create([
            'id_estado' => 19,
            'cidade' => 'São Gonçalo',
            'status' => 1           
        ]);
        $this->command->info("Cidade São Gonçalo cadastrada com sucesso!");      

        Cidades::Create([
            'id_estado' => 19,
            'cidade' => 'Niterói',
            'status' => 1           
        ]);
        $this->command->info("Cidade Niterói cadastrada com sucesso!");    

        Cidades::Create([
            'id_estado' => 19,
            'cidade' => 'Rio de Janeiro',
            'status' => 1           
        ]);
        $this->command->info("Cidade Rio de Janeiro cadastrada com sucesso!");  

        Cidades::Create([
            'id_estado' => 26,
            'cidade' => 'Barueri',
            'status' => 1           
        ]);
        $this->command->info("Cidade Barueri cadastrada com sucesso!");  

        Cidades::Create([
            'id_estado' => 26,
            'cidade' => 'Campinas',
            'status' => 1           
        ]);
        $this->command->info("Cidade Campinas cadastrada com sucesso!"); 
    }
}
