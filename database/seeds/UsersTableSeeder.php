<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::Create([
            'nome' => 'Joao',
            'sobrenome' => 'Alves',
            'email' => 'joao@gmail.com',
            'perfil' => 'corretor',
            'idade' => 22,
            'cpf' => '41587372142',
            'nascimento' => '1998-02-02',
            'sexo' => 1,
            'password' => bcrypt('#A123456')
        ]);
        $this->command->info("Usuário João cadastrado com sucesso!");

        User::Create([
            'nome' => 'Cristina',
            'sobrenome' => 'Nazario',
            'email' => 'cristina@gmail.com',
            'perfil' => 'corretor',
            'idade' => 22,
            'cpf' => '12345678909',
            'nascimento' => '1998-03-20',
            'sexo' => 2,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Cristina cadastrado com sucesso!");

        User::Create([
            'nome' => 'Felipe',
            'sobrenome' => 'Creative',
            'email' => 'Felipe@gmail.com',
            'perfil' => 'corretor',
            'idade' => 22,
            'cpf' => '50885492706',
            'nascimento' => '1990-08-14',
            'sexo' => 1,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Felipe cadastrado com sucesso!");

        User::Create([
            'nome' => 'Antonia',
            'sobrenome' => 'Macedo',
            'email' => 'antonia@gmail.com',
            'perfil' => 'cliente',
            'idade' => 23,
            'cpf' => '58982858300',
            'nascimento' => '1972-06-23',
            'sexo' => 2,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Antonia cadastrado com sucesso!");

        User::Create([
            'nome' => 'Marcos',
            'sobrenome' => 'Montes',
            'email' => 'marcos@gmail.com',
            'perfil' => 'cliente',
            'idade' => 45,
            'cpf' => '34923068531',
            'nascimento' => '1943-03-08',
            'sexo' => 1,
            'password' => bcrypt('#A123456')
        ]);
        $this->command->info("Usuário Marcos cadastrado com sucesso!");

        User::Create([
            'nome' => 'Pedro',
            'sobrenome' => 'Oliveira',
            'email' => 'pedro@gmail.com',
            'perfil' => 'cliente',
            'idade' => 35,
            'cpf' => '58982858300',
            'nascimento' => '1972-06-23',
            'sexo' => 1,            
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Pedro cadastrado com sucesso!");

        User::Create([
            'nome' => 'Osmar',
            'sobrenome' => 'Reis',
            'email' => 'osmar@gmail.com',
            'perfil' => 'cliente',
            'idade' => 35,
            'cpf' => '14634546515',
            'nascimento' => '1993-09-21',
            'sexo' => 1,            
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Osmar cadastrado com sucesso!");

        User::Create([
            'nome' => 'Magda',
            'sobrenome' => 'Félix',
            'email' => 'magda@gmail.com',
            'perfil' => 'cliente',
            'idade' => 47,
            'cpf' => '70032408900',
            'nascimento' => '1986-10-05',
            'sexo' => 2,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Magda cadastrado com sucesso!");

        User::Create([
            'nome' => 'Karina',
            'sobrenome' => 'Telles',
            'email' => 'karina@gmail.com',
            'perfil' => 'cliente',
            'idade' => 78,
            'cpf' => '20644181052',
            'nascimento' => '1951-04-02',
            'sexo' => 2,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Karina cadastrado com sucesso!");

        User::Create([
            'nome' => 'Esther',
            'sobrenome' => 'Almeida',
            'email' => 'esther@gmail.com',
            'perfil' => 'cliente',
            'idade' => 29,
            'cpf' => '65935110563',
            'nascimento' => '1984-04-21',
            'sexo' => 2,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Esther cadastrado com sucesso!");

        User::Create([
            'nome' => 'Ana',
            'sobrenome' => 'Ferreira',
            'email' => 'ana@gmail.com',
            'perfil' => 'cliente',
            'idade' => 34,
            'cpf' => '07401676770',
            'nascimento' => '1969-11-21',
            'sexo' => 2,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Ana cadastrado com sucesso!");

        User::Create([
            'nome' => 'Ronaldo',
            'sobrenome' => 'Ferreira',
            'email' => 'ronaldo@gmail.com',
            'perfil' => 'cliente',
            'idade' => 67,
            'cpf' => '62958091899',
            'nascimento' => '1961-06-15',
            'sexo' => 1,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Ronaldo cadastrado com sucesso!");

        User::Create([
            'nome' => 'Reysa',
            'sobrenome' => 'Morais',
            'email' => 'reysa@gmail.com',
            'perfil' => 'cliente',
            'idade' => 24,
            'cpf' => '27736517231',
            'nascimento' => '1988-11-27',
            'sexo' => 2,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Reysa cadastrado com sucesso!");

        User::Create([
            'nome' => 'Otacílio',
            'sobrenome' => 'Barros',
            'email' => 'otacílio@gmail.com',
            'perfil' => 'cliente',
            'idade' => 24,
            'cpf' => '77448123017',
            'nascimento' => '1998-01-16',
            'sexo' => 1,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Otacílio cadastrado com sucesso!");

        User::Create([
            'nome' => 'Cleyton',
            'sobrenome' => 'Nascimento',
            'email' => 'cleyton@gmail.com',
            'perfil' => 'cliente',
            'idade' => 29,
            'cpf' => '25081141461',
            'nascimento' => '1984-06-06',
            'sexo' => 1,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Cleyton cadastrado com sucesso!");

        User::Create([
            'nome' => 'Reginalda',
            'sobrenome' => 'Garcia',
            'email' => 'reginalda@gmail.com',
            'perfil' => 'cliente',
            'idade' => 29,
            'cpf' => '98984206857',
            'nascimento' => '1983-12-24',
            'sexo' => 2,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Reginalda cadastrado com sucesso!");

        User::Create([
            'nome' => 'Caio',
            'sobrenome' => 'Quitino',
            'email' => 'caio@gmail.com',
            'perfil' => 'cliente',
            'idade' => 22,
            'cpf' => '09862716320',
            'nascimento' => '1999-04-12',
            'sexo' => 1,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Caio cadastrado com sucesso!");

        User::Create([
            'nome' => 'Armando',
            'sobrenome' => 'Ferraz',
            'email' => 'armando@gmail.com',
            'perfil' => 'cliente',
            'idade' => 48,
            'cpf' => '98284124033',
            'nascimento' => '1999-02-23',
            'sexo' => 1,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Armando cadastrado com sucesso!");

        User::Create([
            'nome' => 'Fernanda',
            'sobrenome' => 'Souza',
            'email' => 'fernanda@gmail.com',
            'perfil' => 'cliente',
            'idade' => 39,
            'cpf' => '76544605972',
            'nascimento' => '1995-08-06',
            'sexo' => 2,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Fernanda cadastrado com sucesso!");        

        User::Create([
            'nome' => 'Ernesto',
            'sobrenome' => 'Queiroz',
            'email' => 'ernesto@gmail.com',
            'perfil' => 'cliente',
            'idade' => 27,
            'cpf' => '82000145760',
            'nascimento' => '1998-09-18',
            'sexo' => 1,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Ernesto cadastrado com sucesso!");


        User::Create([
            'nome' => 'Lucas',
            'sobrenome' => 'Dias',
            'email' => 'lucas@gmail.com',
            'perfil' => 'cliente',
            'idade' => 48,
            'cpf' => '73889359590',
            'nascimento' => '1941-05-15',
            'sexo' => 1,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Lucas cadastrado com sucesso!");

        User::Create([
            'nome' => 'Marcello',
            'sobrenome' => 'Borges',
            'email' => 'marcello@gmail.com',
            'perfil' => 'cliente',
            'idade' => 41,
            'cpf' => '79545909250',
            'nascimento' => '1978-08-17',
            'sexo' => 1,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Marcello cadastrado com sucesso!");        

        User::Create([
            'nome' => 'Queila',
            'sobrenome' => 'Silva',
            'email' => 'queila@gmail.com',
            'perfil' => 'cliente',
            'idade' => 32,
            'cpf' => '18366057062',
            'nascimento' => '1989-08-03',
            'sexo' => 2,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Queila cadastrado com sucesso!");

        User::Create([
            'nome' => 'Roberto',
            'sobrenome' => 'Araújo',
            'email' => 'roberto@gmail.com',
            'perfil' => 'cliente',
            'idade' => 65,
            'cpf' => '82151652220',
            'nascimento' => '1944-11-03',
            'sexo' => 1,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Roberto cadastrado com sucesso!");

        User::Create([
            'nome' => 'Elismar',
            'sobrenome' => 'Santana',
            'email' => 'elismar@gmail.com',
            'perfil' => 'cliente',
            'idade' => 32,
            'cpf' => '43082519318',
            'nascimento' => '1986-09-04',
            'sexo' => 1,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Elismar cadastrado com sucesso!");

        User::Create([
            'nome' => 'Robert',
            'sobrenome' => 'Viana',
            'email' => 'robert@gmail.com',
            'perfil' => 'cliente',
            'idade' => 31,
            'cpf' => '40643350403',
            'nascimento' => '1942-05-27',
            'sexo' => 1,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Robert cadastrado com sucesso!");

        User::Create([
            'nome' => 'Silvana',
            'sobrenome' => 'Catarino',
            'email' => 'silvana@gmail.com',
            'perfil' => 'cliente',
            'idade' => 32,
            'cpf' => '45398537326',
            'nascimento' => '1941-02-10',
            'sexo' => 2,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Silvana cadastrado com sucesso!");

        User::Create([
            'nome' => 'Estevão',
            'sobrenome' => 'Lopes',
            'email' => 'estevao@gmail.com',
            'perfil' => 'cliente',
            'idade' => 44,
            'cpf' => '05551223361',
            'nascimento' => '1978-11-09',
            'sexo' => 1,
            'password' => bcrypt('123')
        ]);
        $this->command->info("Usuário Estevão cadastrado com sucesso!");

    }
}
