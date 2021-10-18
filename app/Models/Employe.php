<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'company_id', 'email', 'phone'
    ];

    public function company()
    {
        return $this->belongsTo('App\Models\Company', 'company_id');
    }
}