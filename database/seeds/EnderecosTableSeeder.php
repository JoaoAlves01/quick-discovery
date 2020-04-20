<?php

use Illuminate\Database\Seeder;
use App\Entities\Enderecos;

class EnderecosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('enderecos')->delete();

        Enderecos::Create([           
            'id_usuario' => 1,
            'cep' => 24451700,
            'logradouro' => "Rua Expedicionário Simão Fernandes - Colubande",      
            'numero' => 395,
            'complemento' => '',
            'id_uf' => 19,   
            'id_cidade' => 1
        ]);
        $this->command->info("Endereço Rua Expedicionário Simão Fernandes cadastrada com sucesso!");   

        Enderecos::Create([           
            'id_usuario' => 2,
            'cep' => 24360130,
            'logradouro' => "Rua Elis Regina - São Francisco",      
            'numero' => 745,
            'complemento' => '',
            'id_uf' => 19,   
            'id_cidade' => 2
        ]);
        $this->command->info("Endereço Rua Elis Regina cadastrada com sucesso!");   

        Enderecos::Create([           
            'id_usuario' => 3,
            'cep' => 65908021,
            'logradouro' => "Rua F - Inhoaíba",      
            'numero' => 685,
            'complemento' => '',
            'id_uf' => 19,   
            'id_cidade' => 3
        ]);
        $this->command->info("Endereço Rua F cadastrada com sucesso!");                  

        Enderecos::Create([           
            'id_usuario' => 4,
            'cep' => 69017238,
            'logradouro' => "Rua Iaci - Alphaville Residencial Dois",      
            'numero' => 598,
            'complemento' => '',
            'id_uf' => 26,   
            'id_cidade' => 5
        ]);
        $this->command->info("Endereço Rua Iaci cadastrada com sucesso!");    

        Enderecos::Create([           
            'id_usuario' => 5,
            'cep' => 24360130,
            'logradouro' => "Rua A - Badu",      
            'numero' => 323,
            'complemento' => '',
            'id_uf' => 19,   
            'id_cidade' => 2
        ]);
        $this->command->info("Endereço Rua A cadastrada com sucesso!"); 

        Enderecos::Create([           
            'id_usuario' => 6,
            'cep' => 24110538,
            'logradouro' => "Rua Rogério - Engenhoca",      
            'numero' => 388,
            'complemento' => '',
            'id_uf' => 19,   
            'id_cidade' => 2
        ]);
        $this->command->info("Endereço Rua Rogério cadastrada com sucesso!"); 

        Enderecos::Create([           
            'id_usuario' => 7,
            'cep' => 24110538,
            'logradouro' => "Rua Rogério - Engenhoca",      
            'numero' => 400,
            'complemento' => '',
            'id_uf' => 19,   
            'id_cidade' => 2
        ]);
        $this->command->info("Endereço Rua Rogério cadastrada com sucesso!"); 

        Enderecos::Create([           
            'id_usuario' => 8,
            'cep' => 24315040,
            'logradouro' => "Rua Existente - Atalaia",      
            'numero' => 165,
            'complemento' => '',
            'id_uf' => 19,   
            'id_cidade' => 2
        ]);
        $this->command->info("Endereço Rua Existente cadastrada com sucesso!"); 

        Enderecos::Create([           
            'id_usuario' => 9,
            'cep' => 24450550,
            'logradouro' => "Rua Raul Pederneiras - Mutondo",      
            'numero' => 896,
            'complemento' => '',
            'id_uf' => 19,   
            'id_cidade' => 1
        ]);
        $this->command->info("Endereço Rua Raul Pederneiras com sucesso!"); 

        Enderecos::Create([           
            'id_usuario' => 10,
            'cep' => 24450550,
            'logradouro' => "Rua Raul Pederneiras - Mutondo",   
            'numero' => 890,
            'complemento' => '',
            'id_uf' => 19,   
            'id_cidade' => 1
        ]);
        $this->command->info("Endereço Rua Raul Pederneiras cadastrada com sucesso!"); 

        Enderecos::Create([           
            'id_usuario' => 11,
            'cep' => 24470100,
            'logradouro' => "Rua Amaro Ferreira - Porto do Rosa",      
            'numero' => 594,
            'complemento' => '',
            'id_uf' => 19,   
            'id_cidade' => 1
        ]);
        $this->command->info("Endereço Rua Amaro Ferreira cadastrada com sucesso!"); 

        Enderecos::Create([           
            'id_usuario' => 12,
            'cep' => 24476190,
            'logradouro' => "Rua Rivadavia Correa Meyer - Itaúna",      
            'numero' => 1000,
            'complemento' => '',
            'id_uf' => 19,   
            'id_cidade' => 1
        ]);
        $this->command->info("Endereço Rua Rivadavia Correa Meyer cadastrada com sucesso!"); 

        Enderecos::Create([           
            'id_usuario' => 13,
            'cep' => 78090749,
            'logradouro' => "Rua Vinte e Oito - Jardim Mutinga",      
            'numero' => 757,
            'complemento' => '',
            'id_uf' => 26,   
            'id_cidade' => 4
        ]);
        $this->command->info("Endereço Rua Vinte e Oito cadastrada com sucesso!"); 

        Enderecos::Create([           
            'id_usuario' => 14,
            'cep' => 78061404,
            'logradouro' => "Alameda Guaporé - Morada dos Pássaros",      
            'numero' => 1000,
            'complemento' => '',
            'id_uf' => 26,   
            'id_cidade' => 4
        ]);
        $this->command->info("Endereço Alameda Guaporé cadastrada com sucesso!"); 

        Enderecos::Create([           
            'id_usuario' => 15,
            'cep' => 24476190,
            'logradouro' => "Rua Rivadavia Correa Meyer - Loteamento Alphaville Cuiabá II",      
            'numero' => 778,
            'complemento' => '',
            'id_uf' => 26,   
            'id_cidade' => 4
        ]);
        $this->command->info("Endereço Rua Rivadavia Correa Meyer cadastrada com sucesso!");        

        Enderecos::Create([           
            'id_usuario' => 16,
            'cep' => 78088823,
            'logradouro' => "Alameda Guaporé - Morada dos Pássaros",      
            'numero' => 1000,
            'complemento' => '',
            'id_uf' => 26,   
            'id_cidade' => 4
        ]);
        $this->command->info("Endereço Rua Rivadavia Correa Meyer cadastrada com sucesso!"); 

        Enderecos::Create([           
            'id_usuario' => 17,
            'cep' => 24476190,
            'logradouro' => "Rua Vinte e Três - Jardim Belval",      
            'numero' => 313,
            'complemento' => '',
            'id_uf' => 26,   
            'id_cidade' => 4
        ]);
        $this->command->info("Endereço Rua Vinte e Três cadastrada com sucesso!");    

        Enderecos::Create([           
            'id_usuario' => 18,
            'cep' => 65913170,
            'logradouro' => "Rua Dezessete de Abril - Campo Grande",      
            'numero' => 956,
            'complemento' => '',
            'id_uf' => 19,   
            'id_cidade' => 3
        ]);
        $this->command->info("Endereço Rua Dezessete de Abril cadastrada com sucesso!");   

        Enderecos::Create([           
            'id_usuario' => 19,
            'cep' => 65909410,
            'logradouro' => "Rua Treze de Maio - Anchieta",      
            'numero' => 348,
            'complemento' => '',
            'id_uf' => 19,   
            'id_cidade' => 3
        ]);
        $this->command->info("Endereço Rua Treze de Maio cadastrada com sucesso!");   

        Enderecos::Create([           
            'id_usuario' => 20,
            'cep' => 65918515,
            'logradouro' => "Rua Porto Franco - Jardim Botânico",      
            'numero' => 448,
            'complemento' => '',
            'id_uf' => 19,   
            'id_cidade' => 3
        ]);
        $this->command->info("Endereço Rua Porto Franco cadastrada com sucesso!");   

        Enderecos::Create([           
            'id_usuario' => 21,
            'cep' => 24470100,
            'logradouro' => "Rua Amaro Ferreira - Porto do Rosa",      
            'numero' => 590,
            'complemento' => '',
            'id_uf' => 19,   
            'id_cidade' => 1
        ]);
        $this->command->info("Endereço Rua Amaro Ferreira cadastrada com sucesso!"); 

        Enderecos::Create([           
            'id_usuario' => 22,
            'cep' => 24360130,
            'logradouro' => "Rua A - Badu",      
            'numero' => 315,
            'complemento' => '',
            'id_uf' => 19,   
            'id_cidade' => 2
        ]);
        $this->command->info("Endereço Rua A cadastrada com sucesso!"); 

        Enderecos::Create([           
            'id_usuario' => 23,
            'cep' => 65913170,
            'logradouro' => "Rua Dezessete de Abril - Botafogo",      
            'numero' => 950,
            'complemento' => '',
            'id_uf' => 19,   
            'id_cidade' => 3
        ]);
        $this->command->info("Endereço Rua Dezessete de Abril cadastrada com sucesso!");   

        Enderecos::Create([           
            'id_usuario' => 24,
            'cep' => 65913170,
            'logradouro' => "Rua Dezessete de Abril - Inhaúma",      
            'numero' => 953,
            'complemento' => '',
            'id_uf' => 19,   
            'id_cidade' => 3
        ]);
        $this->command->info("Endereço Rua Dezessete de Abril cadastrada com sucesso!");   


        Enderecos::Create([           
            'id_usuario' => 25,
            'cep' => 69095335,
            'logradouro' => "Rua Pacol - Conjunto Habitacional Parque Itajaí",      
            'numero' => 459,
            'complemento' => '',
            'id_uf' => 26,   
            'id_cidade' => 5
        ]);
        $this->command->info("Endereço Rua Pacol cadastrada com sucesso!");  

        Enderecos::Create([           
            'id_usuario' => 26,
            'cep' => 69088352,
            'logradouro' => "Rua Copaíba - Loteamento Claude de Barros Penteado (Sousas)",      
            'numero' => 378,
            'complemento' => '',
            'id_uf' => 26,   
            'id_cidade' => 5
        ]);
        $this->command->info("Endereço Rua Copaíba cadastrada com sucesso!"); 

        Enderecos::Create([           
            'id_usuario' => 26,
            'cep' => 69088352,
            'logradouro' => "Rua Copaíba - Jardim Icaraí",      
            'numero' => 370,
            'complemento' => '',
            'id_uf' => 26,   
            'id_cidade' => 5
        ]);
        $this->command->info("Endereço Rua Copaíba cadastrada com sucesso!"); 

        Enderecos::Create([           
            'id_usuario' => 28,
            'cep' => 69098212,
            'logradouro' => "Rua Itarantim - Jardim Novo Campos Elíseos",      
            'numero' => 297,
            'complemento' => '',
            'id_uf' => 26,   
            'id_cidade' => 5
        ]);
        $this->command->info("Endereço Rua Itarantim cadastrada com sucesso!");     
        
    }
}
