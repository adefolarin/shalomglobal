<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignCategory extends Model
{
    use HasFactory;
    protected $table = "campaigncategories";
    protected $primaryKey = "campaigncategories_id";
}
