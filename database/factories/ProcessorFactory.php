<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Processor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProcessorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Processor::class;

    public function definition(): array
    {
        return [
            'title' => '5 5500',
            'description' => 'bl;ablalblalbalblalblalalblablalblalblalbalblalbalblablalblablal',
            'base_frequency' => 3.2,
            'max_frequency' => 4.25,
            'count_of_cores' => 6,
            'count_of_streams' => 12,
            'tdp' => 67,
            'socket_id' => 1,
            'frequency_of_processor_id' => 1,
            'vendor_id' => 1,
        ];
    }
}
