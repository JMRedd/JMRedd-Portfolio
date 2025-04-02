<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'project_status',
      'project_type',
      'project_duration',
      'software_used',
      'languages_used',
      'primary_roles',
        'file_path',
        'itch_link',
        'steam_link',
      'body',
        'image_path',
        'is_showcase',
        'start_date',
        'end_date',
        'hide'
    ];
}
