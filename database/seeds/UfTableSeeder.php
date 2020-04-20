<?php

use Illuminate\Database\Seeder;
use App\Entities\Uf;

class UfTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('uf')->delete();

        Uf::Create([
            'id' => '1',
            'estado' => 'Acre',
            'sigla' => 'AC',
            'slug' => 'acre',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '2',
            'estado' => 'Alagoas',
            'sigla' => 'AL',
            'slug' => 'alagoas',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '3',
            'estado' => 'Amazonas',
            'sigla' => 'AM',
            'slug' => 'amazonas',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '4',
            'estado' => 'Amapá',
            'sigla' => 'AP',
            'slug' => 'amapa',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '5',
            'estado' => 'Bahia',
            'sigla' => 'BA',
            'slug' => 'bahia',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '6',
            'estado' => 'Ceará',
            'sigla' => 'CE',
            'slug' => 'ceara',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '7',
            'estado' => 'Distrito Federal',
            'sigla' => 'DF',
            'slug' => 'distrito-federal',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '8',
            'estado' => 'Espírito Santo',
            'sigla' => 'ES',
            'slug' => 'espirito-santo',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '9',
            'estado' => 'Goiás',
            'sigla' => 'GO',
            'slug' => 'goias',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '10',
            'estado' => 'Maranhão',
            'sigla' => 'MA',
            'slug' => 'maranhao',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '11',
            'estado' => 'Minas Gerais',
            'sigla' => 'MG',
            'slug' => 'minas-gerais',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '12',
            'estado' => 'Mato Grosso do Sul',
            'sigla' => 'MS',
            'slug' => 'mato-grosso-do-sul',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '13',
            'estado' => 'Mato Grosso',
            'sigla' => 'MT',
            'slug' => 'mato-grosso',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '14',
            'estado' => 'Pará',
            'sigla' => 'PA',
            'slug' => 'para',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '15',
            'estado' => 'Paraiba',
            'sigla' => 'PB',
            'slug' => 'paraiba',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '16',
            'estado' => 'Pernambuco',
            'sigla' => 'PE',
            'slug' => 'pernambuco',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '17',
            'estado' => 'Piauí',
            'sigla' => 'PI',
            'slug' => 'piaui',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '18',
            'estado' => 'Paraná',
            'sigla' => 'PR',
            'slug' => 'parana',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '19',
            'estado' => 'Rio de Janeiro',
            'sigla' => 'RJ',
            'slug' => 'rio-de-janeiro',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '20',
            'estado' => 'Rio Grande do Norte',
            'sigla' => 'RN',
            'slug' => 'rio-grande-do-norte',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '21',
            'estado' => 'Rondônia',
            'sigla' => 'RO',
            'slug' => 'rondonia',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '22',
            'estado' => 'Roraima',
            'sigla' => 'RR',
            'slug' => 'roraima',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '23',
            'estado' => 'Rio Grande do Sul',
            'sigla' => 'RS',
            'slug' => 'rio-grande-do-sul',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '24',
            'estado' => 'Santa Catarina',
            'sigla' => 'SC',
            'slug' => 'santa-catarina',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '25',
            'estado' => 'Sergipe',
            'sigla' => 'SE',
            'slug' => 'sergipe',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '26',
            'estado' => 'São Paulo',
            'sigla' => 'SP',
            'slug' => 'sao-paulo',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");

        Uf::Create([
            'id' => '27',
            'estado' => 'Tocantins',
            'sigla' => 'TO',
            'slug' => 'tocantins',
            'status' => 1
        ]);
        $this->command->info("UF criada com sucesso!");
    }
}
