<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $results = DB::select( DB::raw("SELECT Version();") );

        var_dump($results);

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
