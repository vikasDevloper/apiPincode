<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

        protected $fillable = ['officename', 'pincode', 'officeType', 'Deliverystatus', 'divisionname', 'regionname', 'circlename', 'Taluk', 'Districtname', 'statename'];

									

}
