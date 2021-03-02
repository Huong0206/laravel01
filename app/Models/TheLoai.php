<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    use HasFactory;
    protected $table ='theloai';
    protected $fillable =[
        'thutu',
        'tieude',
        'tieudekhongdau',
        'tomtat',
    ];
    public function loaiTin(){
        return $this->hasMany(LoaiTin::class, 'theloai_id');
    }
}
