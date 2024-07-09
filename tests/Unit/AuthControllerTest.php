<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_redirects_to_correct_dashboard_for_admin()
    {
        $adminUser = User::factory()->create(['id_level' => '1']);
        Auth::login($adminUser);

        $response = $this->get('/');

        $response->assertRedirect('admin/dashboard/');
    }

    public function test_index_redirects_to_correct_dashboard_for_cashier()
    {
        $cashierUser = User::factory()->create(['id_level' => '2']);
        Auth::login($cashierUser);

        $response = $this->get('/');

        $response->assertRedirect('cashier/dashboard/');
    }

    public function test_index_redirects_to_correct_dashboard_for_customer()
    {
        $customerUser = User::factory()->create(['id_level' => '3']);
        Auth::login($customerUser);

        $response = $this->get('/');

        $response->assertRedirect('customer/dashboard/');
    }

    public function test_index_returns_login_view_for_guest_user()
    {
        $response = $this->get('/');

        $response->assertViewIs('login');
    }

    public function test_proses_login_redirects_to_correct_dashboard_for_admin()
    {
        $adminUser = User::factory()->create(['id_level' => '1']);

        $response = $this->post('/login', [
            'username' => $adminUser->username,
            'password' => 'password',
        ]);

        $response->assertRedirect('admin/dashboard/');
    }

    public function test_proses_login_redirects_to_correct_dashboard_for_cashier()
    {
        $cashierUser = User::factory()->create(['id_level' => '2']);

        $response = $this->post('/login', [
            'username' => $cashierUser->username,
            'password' => 'password',
        ]);

        $response->assertRedirect('cashier/dashboard/');
    }

    public function test_proses_login_redirects_to_homepage_for_other_users()
    {
        $user = User::factory()->create(['id_level' => '3']);

        $response = $this->post('/login', [
            'username' => $user->username,
            'password' => 'password',
        ]);

        $response->assertRedirect('/');
    }

    public function test_proses_login_returns_with_errors_for_invalid_credentials()
    {
        $response = $this->post('/login', [
            'username' => 'invalid_username',
            'password' => 'invalid_password',
        ]);

        $response->assertRedirect('login')
            ->assertSessionHasErrors(['login_gagal']);
    }
}