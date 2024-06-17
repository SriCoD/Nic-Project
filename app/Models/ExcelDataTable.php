<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcelDataTable extends Model
{

    protected $fillable = [
        'column1', 'column2',  
        'column3', 'column4','column5', 'column6','column7','column8','column9','column10','column11','column12',
    ];
    use HasFactory;
}
