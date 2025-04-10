<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create ([
            'nome' => 'Cliente Exemplo',
            'endereco' => 'Rua Exemplo, 123',
            'telefone' => '18996916978',
            'cpf' => '12345678901',
            'email' => 'cliente@exemple.com',
            'senha' => bcrypt('senha 123'),
        ]);

        Cliente::create ([
            'nome' => 'Ana Clara Rodrigues',
            'endereco' => 'Rua Rio Branco, 2030',
            'telefone' => '18996913924',
            'cpf' => '10987654321',
            'email' => 'ana.rodrigues.com',
            'senha' => bcrypt('senha 2601'),
        ]);

        Cliente::create ([
            'nome' => 'João Costa',
            'endereco' => 'Rua Rio de Janeiro, 1025',
            'telefone' => '18996916964',
            'cpf' => '9876345102',
            'email' => 'joao@costa.com',
            'senha' => bcrypt('senha 0405'),
        ]);
    }
}
