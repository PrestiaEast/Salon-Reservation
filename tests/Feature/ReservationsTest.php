<?php

namespace Tests\Feature;

use App\Reservation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReservationsTest extends TestCase
{
    /** @test */
    public function a_user_can_see_all_reservations()
    {
        $reservation = factory(Reservation::class, 10)->create();
        $response = $this->get('/reservations');
        $response->assertStatus(200);

    }   

    /** @test */
    public function a_user_can_see_a_single_reservation() {
        $reservation = factory(Reservation::class)->create();
        $response = $this->get('/reservations/' . $reservation->id);
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_create_an_reservation()
    {
        $response = $this->get('/reservations/create');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_store_new_reservation()
    {
        $form_fields = factory(Reservation::class)->raw();
        $response = $this->post('/reservations', $form_fields);
        $this->assertDatabaseHas('reservations', $form_fields);
        $response->assertRedirect('/reservations');


    }

    /** @test */
    public function a_user_can_delete_an_reservation()
    {
        $form_fields = factory(Reservation::class)->create();
        $response = $this->delete('/reservations/' .$form_fields->id);
        $response->assertRedirect('/reservations');
    }
}
