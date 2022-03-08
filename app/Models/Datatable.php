<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datatable extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'id', 'first_name', 'last_name', 'name_abrv', 'position', 'email', 'office', 'start_date_epoch', 'start_date', 'age', 'salary', 'seq', 'extn'
    ];
}
