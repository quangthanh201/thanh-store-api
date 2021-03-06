<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ProductsImport implements ToCollection
{
    /**
     * @param Collection $collection
     * @return Product[]|\Illuminate\Database\Eloquent\Collection
     */
    public function collection(Collection $collection)
    {
        return Product::all();
    }
}
