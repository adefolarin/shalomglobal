<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampainScheduler extends Model
{
    use HasFactory;

    protected $table = "campaignschedulers";
    protected $primaryKey = "campaignschedulers_id";
}
