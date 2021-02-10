<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;
use App\Models\Category;

class Version extends Model
{
    use HasFactory;

    protected $fillable = ["name", "is_active"];

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
        $pages = $this->pages()->pluck("pages.id")->all();
        return Category::whereHas('pages', function ($query) use ($pages) {
            $query->whereIn('pages.id', $pages);
        });
    }

    public function scopeLast($query) {
        return $query->where("is_active", 1)->orderBy('id','desc')->first();
    }
}
