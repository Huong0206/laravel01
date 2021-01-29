<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tin extends Model
{
    use HasFactory;
    protected $table ='tin';
    protected $fillable =[
        'thu_tu',
        'loai_tin',
        'the_loai',
        'tom_tat',
    ];
}
