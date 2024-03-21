<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Response;

class UserApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testCreateUser(): void
    {
         // Define the request data
         $data = [
            'firstName' => 'John',
            'lastName' => 'Doe',
            'email' => 'john.doe@example.com',
        ];

        // Send POST request to the users endpoint with JSON data
        $response = $this->json('POST', '/api/users', $data);

        // Assert that the response has a successful status code
        $response->assertStatus(Response::HTTP_OK);

        // Assert that the response contains the created user data
        $response->assertJson([
            'message' => 'User data stored successfully'
        ]);
    }
}
