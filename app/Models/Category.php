<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["name"];

    public function pages() {
        return $this->belongsToMany(Page::class);
    }

    public function getHtmlIdAttribute() {
        return strtolower(str_replace(" ","-",$this->name));
    }

    public function getFirstPageAttribute() {
        return $this->pages()->first();
    }

    public function scopeDefault($query) {
        return $query->first();
    }
}
