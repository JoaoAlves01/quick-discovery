<?php

use Illuminate\Database\Seeder;
use App\Entities\CoberturasUser;

class CoberturasUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coberturas_users')->delete();

        CoberturasUser::Create([
            'id_cobertura' => 1,
            'id_usuario' => 4,
            'premio' => 16000.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 4 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 1,
            'id_usuario' => 5,
            'premio' => 10000.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 5 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 1,
            'id_usuario' => 6,
            'premio' => 7000.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 6 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 1,
            'id_usuario' => 7,
            'premio' => 7000.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 7 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 2,
            'id_usuario' => 8,
            'premio' => 5000.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 8 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 2,
            'id_usuario' => 9,
            'premio' => 1600.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 9 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 2,
            'id_usuario' => 10,
            'premio' => 5500.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 10 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 2,
            'id_usuario' => 11,
            'premio' => 7000.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 11 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 3,
            'id_usuario' => 12,
            'premio' => 1000.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 12 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 3,
            'id_usuario' => 13,
            'premio' => 3300.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 13 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 3,
            'id_usuario' => 14,
            'premio' => 7000.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 14 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 3,
            'id_usuario' => 15,
            'premio' => 3300.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 15 cadastrado com sucesso!");
    
        CoberturasUser::Create([
            'id_cobertura' => 4,
            'id_usuario' => 16,
            'premio' => 7000.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 16 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 4,
            'id_usuario' => 17,
            'premio' => 7000.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 17 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 4,
            'id_usuario' => 18,
            'premio' => 2501.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 18 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 4,
            'id_usuario' => 19,
            'premio' => 7000.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 19 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 5,
            'id_usuario' => 20,
            'premio' => 6000.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 20 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 5,
            'id_usuario' => 21,
            'premio' => 1230.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 21 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 5,
            'id_usuario' => 22,
            'premio' => 3900.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 22 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 5,
            'id_usuario' => 23,
            'premio' => 8000.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 23 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 6,
            'id_usuario' => 24,
            'premio' => 7000.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 24 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 6,
            'id_usuario' => 25,
            'premio' => 5000.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 25 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 6,
            'id_usuario' => 26,
            'premio' => 3000.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 26 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 6,
            'id_usuario' => 27,
            'premio' => 1430.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 27 cadastrado com sucesso!");

        CoberturasUser::Create([
            'id_cobertura' => 6,
            'id_usuario' => 28,
            'premio' => 16000.00,
            'status' => 1
        ]);
        $this->command->info("Usuário 28 cadastrado com sucesso!");

    }
}
