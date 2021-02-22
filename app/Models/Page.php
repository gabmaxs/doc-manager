<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ["name", "title"];

    public function sections() {
        return $this->belongsToMany(Section::class)->withPivot('sequence')->orderByPivot('sequence');
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function setTitleAttribute($value) {
        $this->attributes['title'] = strtolower(str_replace(" ","-",$value));
    }

    public function scopeDefault($query) {
        return $query->first();
    }

    public function delete() {
        $this->categories()->detach();
        $this->sections()->detach();
        parent::delete();
    }
}
