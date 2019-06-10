<?php

namespace App\Http\Controllers;

use App\Models\PostType;

class SiteFunction extends Controller
{
    public function checkPostType($type){
        $postType = PostType::where('name', $type)->get()->first();
        if ($type == $postType->name) {
            return $postType;
        }
    }
}
