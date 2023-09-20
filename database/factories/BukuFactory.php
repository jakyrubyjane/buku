<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => $this ->faker ->unique() ->randomnumber(),
            'judul' => $this ->faker ->title(),
            'penulis' => $this ->faker ->name(),
            'harga' => $this ->faker ->randomnumber(),
            'tgl_terbit' => $this ->faker ->date($format='Y-m-d', $max='now')
        ];
    }
}
