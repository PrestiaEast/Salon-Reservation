<?php

namespace Tests\Feature;

use App\ServiceRendered;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServicesRenderedTest extends TestCase
{
    /** @test */
    public function a_user_can_see_all_services_rendered()
    {
        $servicerendered = factory(ServiceRendered::class, 5)->create();
        $response = $this->get('/service-rendered');
        $response->assertStatus(200);

    }   

    /** @test */
    public function a_user_can_see_a_single_services_rendered() {
        $servicerendered = factory(ServiceRendered::class)->create();
        $response = $this->get('/service-rendered/' . $servicerendered->id);
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_create_an_services_rendered()
    {
        $response = $this->get('/service-rendered/create');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_store_new_services_rendered()
    {
        $form_fields = factory(ServiceRendered::class)->raw();
        $response = $this->post('/service-rendered', $form_fields);
        $this->assertDatabaseHas('service-rendered', $form_fields);
        $response->assertRedirect('/service-rendered');

    }


    /** @test */
    public function a_user_can_delete_an_services_rendered()
    {
        $form_fields = factory(ServiceRendered::class)->create();
        $response = $this->delete('/service-rendered/' .$form_fields->id);
        $response->assertRedirect('/service-rendered');
    }
}
