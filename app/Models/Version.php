<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;
use App\Models\Category;

class Version extends Model
{
    use HasFactory;

    protected $fillable = ["name", "is_active", "title"];

    protected $casts = ["is_active" => "boolean"];

    public function sections() {
        return $this->belongsToMany(Section::class);
    }

    public function pages() {
        $sections = $this->sections()->pluck("sections.id")->all();
        return  Page::whereHas('sections', function ($query) use ($sections) {
            $query->whereIn('sections.id',$sections);
        });
    }

    public function categories() {
        return $this->belongsToMany(Category::class)->withPivot('sequence')->orderByPivot('sequence');;
    }

    public function scopeLast($query) {
        return $query->where("is_active", 1)->orderBy('id','desc')->first();
    }

    public function setTitleAttribute($value) {
        $this->attributes['title'] = strtolower(str_replace(" ","-",$value));
    }
}
