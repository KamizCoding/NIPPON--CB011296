<?php

namespace Tests\Unit;

use App\Models\Cart;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteFromCartUnitTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test removing a visa from the cart.
     *
     * @return void
     */
    public function test_remove_visa_from_cart()
    {
        $cartItem = Cart::create([
            'product_title' => 'Test Product',
            'product_quantity' => 1,
            'product_price' => 100,
        ]);

        $response = $this->get('/remove_visa/' . $cartItem->id);

        $response->assertStatus(302);

        $response->assertRedirect();

        $this->assertDatabaseMissing('carts', ['id' => $cartItem->id]);
    }
}
