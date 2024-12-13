<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visacategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'Visa_Category_Name',
        'Validity_Period_in_Days',
        'Max_Length_of_Stay_in_Days'
    ];
}
