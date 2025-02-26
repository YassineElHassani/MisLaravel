<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Scalar\Float_;
use Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::factory()
            ->count(10)
            ->sequence(['name' => 'Name'], ['description' => 'Description'], ['price' => 'Price'])
            ->create();
    }
}
