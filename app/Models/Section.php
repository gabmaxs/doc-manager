<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ["name", "content"];

    protected $appends = ["htmlId"];

    public function versions() {
        return $this->belongsToMany(Version::class);
    }

    public function pages() {
        return $this->belongsToMany(Page::class);
    }

    public function getHtmlIdAttribute() {
        return strtolower(str_replace(" ","-",$this->name));
    }
}
