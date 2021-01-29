<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    use HasFactory;
    protected $table ='loaitin';
    protected $fillable =[
        'thu_tu',
        'tieu_de',
        'tieu_de_khong_dau',
        'tom_tat',
    ];



    // protected $guarded =[

    // ]; loai tru
}
