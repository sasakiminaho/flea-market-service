<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     * @test
     */


    // public function showLogin_ログイン画面が表示されているか()
    // {
    //     $response = $this->get('login');
    //     $response->assertStatus(200);

    //     $this->assertGuest();
    // }

    public function login_ログイン処理が行えるか()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('login');
        $response->assertStatus(302);
    }
}
