<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = [
        'trainee_name',
        'training_title',
        'training_date',
        'status',
    ];
}
