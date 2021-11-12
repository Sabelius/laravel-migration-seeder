<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = ["journey_name", "description", "departure_date", "return_date", "available_places", "price", "is_available"];
}
