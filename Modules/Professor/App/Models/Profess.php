<?php

namespace Modules\Professor\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Professor\Database\factories\ProfessFactory;

class Profess extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['title,description,status'];
    
    protected static function newFactory(): ProfessFactory
    {
        //return ProfessFactory::new();
    }
}
