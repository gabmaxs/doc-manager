<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["name", "title", "icon"];

    public function pages() {
        return $this->belongsToMany(Page::class)->withPivot('sequence')->orderByPivot('sequence');;
    }

    public function versions() {
        return $this->belongsToMany(Version::class)->withPivot('sequence')->orderByPivot('sequence');;
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

    public function delete() {
        // EU QUERO DELETAR AS PAGINAS  DESSA CATEGORIA TBM?
        // Page::destroy($this->pages()->select('id')->get());
        $this->pages()->detach();
        parent::delete();
    }

    public function createPageWithSection(Version $version) {
        $page = Page::create([
            "name" => "First Page for {$this->attributes['name']}",
            "title" => "First Page for {$this->attributes['name']}"
        ]);
        $this->pages()->attach($page->id, ["sequence" => 1]);

        $section = $page->createSection($version);
        $section->versions()->attach($version->id);

        return $page;
    }
}
