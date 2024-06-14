<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcelDataTable extends Model
{

    protected $fillable = [
        'column1', // Add other columns here as needed
    ];
    use HasFactory;
}
