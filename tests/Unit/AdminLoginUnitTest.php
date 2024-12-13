<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminLoginUnitTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test admin login.
     *
     * @return void
     */
    public function test_admin_login()
    {
        $admin = Admin::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);


        $credentials = [
            'email' => 'admin@gmail.com',
            'password' => 'password',
        ];


        $loginSuccessful = Auth::guard('admin')->attempt($credentials);

        $this->assertTrue($loginSuccessful);

    }
}

