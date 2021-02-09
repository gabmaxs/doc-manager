<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;

    protected $fillable = ["name", "is_active"];

    protected $casts = ["is_active" => "boolean"];

    public function sections() {
        return $this->belongsToMany(Section::class);
    }

    public function pages() {
        //
    }

    public function categories() {
        //
    }
}
