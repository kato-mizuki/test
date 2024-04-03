<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class company extends Model
{
    public function getList() {
        // companiesテーブルからデータを取得
        $companies = DB::table('companies')->get();

        return $companies;
    }
}
