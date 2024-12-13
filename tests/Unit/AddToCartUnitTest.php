<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AddToCartUnitTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test adding a product to the cart.
     *
     * @return void
     */
    public function test_adding_product_to_cart()
    {
        $user = User::factory()->create();

        $product = Product::create([
            'title' => 'Test Product',
            'category' => 'Test Category',
            'price' => 100,
            'description' => 'Test Description',
        ]);

        $response = $this->actingAs($user)->post('/book_now/' . $product->id, [
            'Quantity' => 1,
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/cart');

        $this->assertDatabaseHas('carts', [
            'product_id' => $product->id,
            'product_quantity' => 1,
        ]);
    }
}
