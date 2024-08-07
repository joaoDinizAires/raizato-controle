<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Cria 10 fornecedores
        Supplier::factory(10)->create()->each(function ($supplier) {
            // Para cada fornecedor, cria 5 produtos
            Product::factory(5)->create(['supplier_id' => $supplier->id]);
        });
    }
}
