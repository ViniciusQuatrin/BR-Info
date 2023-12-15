<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Venda as Venda;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venda>
 */
class VendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Venda::class;
    
    public function definition()
    {
        return [
            'data' => $this->faker->date(),
            'valor' => $this->faker->randomFloat(2, 0, 100),
            'forma_pagamento' => $this->faker->word(),
            'funcionario_id' => $this->faker->numberBetween(1, 10),
            'cliente_id' => $this->faker->numberBetween(1, 10),
            'produto_id' => $this->faker->numberBetween(1, 100),
            'forma_pagamento' => $this->faker->randomElement(['debito', 'pix', 'dinheiro']),
            //'servico_id' => $this->faker->number(0),
        ];
    }
}
