<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ["name", "content", "title"];

    public function versions() {
        return $this->belongsToMany(Version::class);
    }

    public function pages() {
        return $this->belongsToMany(Page::class);
    }

    public function setTitleAttribute($value) {
        $this->attributes['title'] = strtolower(str_replace(" ","-",$value));
    }

    public function delete() {
        $this->versions()->detach();
        $this->pages()->detach();
        parent::delete();
    }
}
