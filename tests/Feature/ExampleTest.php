<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_welcome_page_is_accessible(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
