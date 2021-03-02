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
    public function theloai(){
        return $this->belongsTo(Theloai::class);

    }
    public function tin(){
        return $this->hasMany(Tins::class, 'loaitin_id');
        
    }
}



    // protected $guarded =[

    // ]; loai tru

