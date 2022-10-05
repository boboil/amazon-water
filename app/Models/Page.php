<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $table = 'page';

    public static function buildMenus()
    {
        return self::where('is_active', true)->orderBy('sort_order')->get();
    }

    public static function getPage($slug)
    {
        $page = self::where('slug', $slug)->where('is_active', true)->firstOrFail();
        if ($page) {
            return $page;
        }
        abort(404);
    }
}
