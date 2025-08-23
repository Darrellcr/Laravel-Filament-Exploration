<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PurchaseOrder>
 */
class PurchaseOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_number' => $this->faker->unique()->numerify('PO-#####'),
            'company_address' => $this->faker->address(),
            'vendor' => $this->faker->company(),
            'vendor_address' => $this->faker->address(),
            'value' => $this->faker->numberBetween(1000, 10000),
        ];
    }
}
