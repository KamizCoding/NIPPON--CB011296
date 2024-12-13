<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserCreationUnitTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test user creation.
     *
     * @return void
     */
    public function test_user_creation()
    {
        $userData = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'phone' => '1234567890',
            'date_of_birth' => '1990-01-01',
            'home_address' => '123 Main St',
            'password' => Hash::make('password123'), 
        ];

        $user = User::create($userData);

        $this->assertDatabaseHas('users', [
            'email' => 'john.doe@example.com',
        ]);
        $this->assertEquals('John', $user->first_name);
        $this->assertEquals('Doe', $user->last_name);
        $this->assertEquals('john.doe@example.com', $user->email);
        $this->assertEquals('1234567890', $user->phone);
        $this->assertEquals('1990-01-01', $user->date_of_birth);
        $this->assertEquals('123 Main St', $user->home_address);
        $this->assertTrue(Hash::check('password123', $user->password));
    }
}
