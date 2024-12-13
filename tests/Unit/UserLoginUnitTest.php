<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserLoginUnitTest extends TestCase
{
    /**
     * Test user login.
     *
     * @return void
     */
    public function test_user_login()
    {
        $user = User::factory()->create([
            'email' => 'kamiz@gmail.com',
            'password' => Hash::make('kamiz12345'), 
        ]);

        $credentials = [
            'email' => 'kamiz@gmail.com',
            'password' => 'kamiz12345',
        ];

        $loginSuccessful = Auth::attempt($credentials);

        $this->assertTrue($loginSuccessful);
    }
}
