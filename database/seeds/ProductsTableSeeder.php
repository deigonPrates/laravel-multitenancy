<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Tenant::setTenant(null);
        $categories = Category::all();
        factory(Product::class, 100)
            ->make()
            ->each(function (Product $product) use ($categories) {
                $tenantId = rand(1,2);
                $category = $categories->where('company_id', $tenantId)->random();
                $product->category_id = $category->id;
                $product->company_id = $tenantId;
                $product->save();
            });
    }
}
