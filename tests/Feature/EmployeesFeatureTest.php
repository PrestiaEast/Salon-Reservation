<?php

namespace Tests\Feature;

use App\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class EmployeesFeatureTest extends TestCase
{
    /** @test */
    public function a_user_can_see_all_employees()
    {
        $employee = factory(Employee::class, 10)->create();
        $response = $this->get('/employees');
        $response->assertStatus(200);

    }   

    /** @test */
    public function a_user_can_see_a_single_employee() {
        $employee = factory(Employee::class)->create();
        $response = $this->get('/employees/' . $employee->id);
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_create_an_employee()
    {
        $response = $this->get('/employees/create');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_store_new_employee()
    {
        $form_fields = factory(Employee::class)->raw();
        $response = $this->post('/employees', $form_fields);
        $this->assertDatabaseHas('employees', $form_fields);
        $response->assertRedirect('/employees');


    }

    /** @test */
    public function update_employee()
    {
        $employee = factory(Employee::class)->create();
        $employee_updated_values = factory(Employee::class)->raw([
            'employee_id' => $employee->id
        ]);

        $response = $this->put('/employees/' . $employee->id, $employee_updated_values);

        $this->assertDatabaseMissing('employee', [
            "employee_name" => $employee->employee_name,
            "age" => $employee->age,
            "contact_number" => $employee->contact_number  
        ]);

        $this->assertDatabaseHas('employee' . $employee_updated_values);
        $response->assertRedirect('/employees');
    }   

    /** @test */
    public function a_user_can_delete_an_employee()
    {
        $form_fields = factory(Employee::class)->create();
        $response = $this->delete('/employees/' .$form_fields->id);
        $response->assertRedirect('/employees');
    }
}
