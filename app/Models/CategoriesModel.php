<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CategoriesModel extends Model
{
    use HasFactory;

    public function getCategories () {
        return DB::table('categories')
            ->get();
    }

    public function getCategory(int $id) {
        return DB::table('categories')
            ->where('id', '=', $id)
            ->get()[0];
    }
}
