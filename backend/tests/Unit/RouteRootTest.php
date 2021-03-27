<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * Apenas para testar a rota pradrão...
     *
     * @return void
     */
    public function testRootRoute()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
