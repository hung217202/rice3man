<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiSP extends Model
{
    use HasFactory;
    protected $table ="loaisanpham"; 
    public  $primaryKey = "idLoai";
    protected $fillable = ['idLoai', 'tenLoai','thuTu', 'anHien'];
    protected $attributes= ['anHien'=> 1];  
}
