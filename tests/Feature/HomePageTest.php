<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * Valida que la ruta principal ('/') devuelva código HTTP 200 y cargue la vista 'welcome'.
     */
    public function test_home_page_returns_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200)
                 ->assertViewIs('welcome');
    }

    /**
     * Valida que la página principal contenga información esencial de Laravel.
     */
    public function test_home_page_contains_laravel_branding(): void
    {
        $response = $this->get('/');

        $response->assertSee('Laravel')
                 ->assertSee('ecosystem');
    }
}
