<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["name", "title", "icon"];

    public function pages() {
        return $this->belongsToMany(Page::class);
    }

    public function setTitleAttribute($value) {
        $this->attributes['title'] = strtolower(str_replace(" ","-",$value));
    }

    public function getFirstPageAttribute() {
        return $this->pages()->first();
    }

    public function scopeDefault($query) {
        return $query->first();
    }
}
