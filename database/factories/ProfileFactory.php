<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        "user_id"=>fake()->numberBetween(1,5),
            "title"=>fake()->title,
            "description"=>fake()->text,
            'url'=>fake()->url
        ];
    }
}

//      $table->id();
//            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
//            $table->string('title')->nullable();
//            $table->text('description')->nullable();
//            $table->string('url')->nullable();
//            $table->timestamps();
