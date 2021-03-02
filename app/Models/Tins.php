<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tins extends Model
{
    use HasFactory;
    protected $table ='tins';
    protected $fillable =[
        'thu_tu',
        'loai_tin',
        'tom_tat',
    ];
    public function loaiTins(){
        return $this->belongsTo(LoaiTin::class);
        
    }
}
