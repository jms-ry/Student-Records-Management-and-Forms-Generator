<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id', 'barangay', 'municipality', 'province', 'zip_code', 'type',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
