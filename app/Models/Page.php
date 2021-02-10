<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ["name"];

    public function sections() {
        return $this->belongsToMany(Section::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function getHtmlIdAttribute() {
        return strtolower(str_replace(" ","-",$this->name));
    }

    public function scopeDefault($query) {
        return $query->first();
    }
}
