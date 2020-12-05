<?php

namespace Tests\Feature;

use App\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class CustomersFeatureTest extends TestCase
{
     /** @test */
    public function a_user_can_see_all_customers()
    {
        $customer = factory(Customer::class, 10)->create();
        $response = $this->get('/customers');
        $response->assertStatus(200);

    }   

    /** @test */
    public function a_user_can_see_a_single_customer() {
        $customer = factory(Customer::class)->create();
        $response = $this->get('/customers/' . $customer->id);
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_create_an_customer()
    {
        $response = $this->get('/customers/create');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_store_new_customer()
    {
        $form_fields = factory(Customer::class)->raw();
        $response = $this->post('/customers', $form_fields);
        $this->assertDatabaseHas('customers', $form_fields);
        $response->assertRedirect('/customers');


    }

    /** @test */
    public function update_customer()
    {
        $customer = factory(Customer::class)->create();
        $customer_updated_values = factory(Customer::class)->raw([
            'customer_id' => $customer->id
        ]);

        $response = $this->put('/customers/' . $customer->id, $customer_updated_values);

        $this->assertDatabaseMissing('customer', [
            "name" => $customer->name,
            "age" => $customer->age,
            "contact_number" => $customer->contact_number,
            "service_reserved" => $customer->service_reserved
        ]);

        $this->assertDatabaseHas('customer' . $customer_updated_values);
        $response->assertRedirect('/customers');
    }   

    /** @test */
    public function a_user_can_delete_an_customer()
    {
        $form_fields = factory(Customer::class)->create();
        $response = $this->delete('/customers/' .$form_fields->id);
        $response->assertRedirect('/customers');
    }
}
