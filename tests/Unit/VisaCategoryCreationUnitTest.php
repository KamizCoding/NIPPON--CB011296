<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\visacategory;
use Illuminate\Support\Facades\Hash; // Import Hash facade

class VisaCategoryCreationUnitTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test user creation.
     *
     * @return void
     */
    public function test_visacategory_creation()
    {
        $categoryData = [
            'Visa_Category_Name' => 'business',
            'Validity_Period_in_Days' => '90',
            'Max_Length_of_Stay_in_Days' => '90',
        ];

        $visacategory = visacategory::create($categoryData);

        $this->assertDatabaseHas('visacategories', [
            'Visa_Category_Name' => 'business',
        ]);

        $this->assertEquals('business', $visacategory->Visa_Category_Name);
        $this->assertEquals('90', $visacategory->Validity_Period_in_Days);
        $this->assertEquals('90', $visacategory->Max_Length_of_Stay_in_Days);
    }
}
