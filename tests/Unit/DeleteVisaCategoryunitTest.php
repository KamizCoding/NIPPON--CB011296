<?php

namespace Tests\Unit;

use App\Models\VisaCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteVisaCategoryUnitTest extends TestCase
{
    use RefreshDatabase;

    public function test_delete_visa_category()
    {
        $visaCategory = VisaCategory::create([
            'Visa_Category_Name' => 'Test Visa Category',
            'Validity_Period_in_Days' => 30,
            'Max_Length_of_Stay_in_Days' => 15,
        ]);

        $this->assertDatabaseHas('visacategories', [
            'id' => $visaCategory->id,
            'Visa_Category_Name' => 'Test Visa Category'
        ]);

        $response = $this->get('/delete_visa_category/' . $visaCategory->id);

        $response->assertStatus(302);

        $this->assertDatabaseMissing('visacategories', [
            'id' => $visaCategory->id,
            'Visa_Category_Name' => 'Test Visa Category'
        ]);
    }
}
