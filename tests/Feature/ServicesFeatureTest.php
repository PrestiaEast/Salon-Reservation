<?php

namespace Tests\Feature;

use App\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class ServicesFeatureTest extends TestCase
{
    /** @test */
    public function a_user_can_see_all_services()
    {
        $service = factory(Service::class, 5)->create();
        $response = $this->get('/services');
        $response->assertStatus(200);

    }   

    /** @test */
    public function a_user_can_see_a_single_service() {
        $service = factory(Service::class)->create();
        $response = $this->get('/services/' . $service->id);
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_create_an_service()
    {
        $response = $this->get('/services/create');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_store_new_service()
    {
        $form_fields = factory(Service::class)->raw();
        $response = $this->post('/services', $form_fields);
        $this->assertDatabaseHas('services', $form_fields);
        $response->assertRedirect('/services');


    }

    /** @test */
    public function update_service()
    {
        $service = factory(Service::class)->create();
        $service_updated_values = factory(Service::class)->raw([
            'service_id' => $service->id
        ]);

        $response = $this->put('/services/' . $service->id, $service_updated_values);

        $this->assertDatabaseMissing('service', [
            "service_name" => $service->service_name,
            "service_charge" => $service->age
             
        ]);

        $this->assertDatabaseHas('service' . $service_updated_values);
        $response->assertRedirect('/services');
    }   

    /** @test */
    public function a_user_can_delete_an_service()
    {
        $form_fields = factory(Service::class)->create();
        $response = $this->delete('/services/' .$form_fields->id);
        $response->assertRedirect('/services');
    }
}
