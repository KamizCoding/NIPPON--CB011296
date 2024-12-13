<?php

namespace Tests\Unit;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteProductUnitTest extends TestCase
{
    use RefreshDatabase;

    public function test_delete_product()
    {
        $product = Product::create([
            'Title' => 'Test Product',
            'Description' => 'Test Description',
            'Image' => 'test_image.jpg',
            'Category' => 'Test Category',
            'Quantity' => '10',
            'Price' => '100',
        ]);

        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'Title' => 'Test Product'
        ]);

        $response = $this->get('/delete_product/' . $product->id);

        $response->assertStatus(302);

        $this->assertDatabaseMissing('products', [
            'id' => $product->id,
            'Title' => 'Test Product'
        ]);
    }
}
