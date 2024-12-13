<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class ProductCreationUnitTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test user creation.
     *
     * @return void
     */
    public function test_product_creation()
    {
        $productData = [
            'Title' => 'head',
            'Description' => 'Doe',
            'Image' => 'john.doe@example.com',
            'Category' => 'Student',
            'Quantity' => '2',
            'Price' => '5000',
        ];

        $product = Product::create($productData);

        $this->assertDatabaseHas('products', [
            'Title' => 'head',
        ]);

        $this->assertEquals('head', $product->Title);
        $this->assertEquals('Doe', $product->Description);
        $this->assertEquals('john.doe@example.com', $product->Image);
        $this->assertEquals('Student', $product->Category);
        $this->assertEquals('2', $product->Quantity);
        $this->assertEquals('5000', $product->Price);
    }
}
