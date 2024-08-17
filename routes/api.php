<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Jobs\ProcessProductData;

Route::post('/api/process-product-data', function () {
    $productData = [
        'id' => 'some-uuid',
        'product_name' => 'Sample Product',
        'parent_category' => 'Category',
        'description' => 'This is a sample product.',
        'on_sale' => true,
        'updated_at' => now(),
    ];

    // Dispatch the job
    ProcessProductData::dispatch($productData);

    return response()->json(['status' => 'Job dispatched']);
});
