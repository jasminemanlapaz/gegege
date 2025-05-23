<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    //gawa muna table ha bago migrate
    protected $table = 'employee_tb_';
    protected $primarykey = 'id';
    protected $fillable = [
        'fname',
        'lname', 
        'midname',
        'age',
        'address',
        'zip'
    ];
}
