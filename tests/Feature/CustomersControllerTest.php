<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Controllers\CustomersController;
use Tests\TestCase;

class CustomersControllerTest extends TestCase
{
    protected $mock = [1, 'test', 'test', 'test', 'test', 1, 1, 1, 1];
    protected $data = [1, 'test', 'test', 'test', 'test', 1, 1, 1, 1];

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $client_mock = \Mockery::mock('overload:App\Models\Customers');
        $client_mock->shouldReceive('create')->with($this->data);
        // ->andReturn($returnValue);

        $obj = new CustomersController;
        $response = $obj->getCustomers();
        // var_dump($response);

        $this->assertEquals($response, $this->mock);

        // $response = $this->get('/api/customers/customers');
        // $response->dump();

        // $response->assertStatus(200);
    }
}
