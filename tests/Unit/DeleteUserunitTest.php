<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteUserUnitTest extends TestCase
{
    use RefreshDatabase;

    public function test_delete_user()
    {
        $user = User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
            'phone' => '1234567890',
            'date_of_birth' => '1997-01-02',
            'home_address' => '1234 Test St, Test City, TX 12345',
            'password' => bcrypt('password'),
        ]);

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'email' => 'test@example.com',
        ]);

        $response = $this->get('/delete_clients/' . $user->id);

        $response->assertStatus(302);

        $this->assertDatabaseMissing('users', [
            'id' => $user->id,
            'email' => 'test@example.com',
        ]);
    }
}
