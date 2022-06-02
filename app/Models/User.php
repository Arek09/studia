<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'surname',
        'email',
        'password',
        'image',
        'created_at',
        'updated_at',
        'rank_id',
    ];
    
    protected $table = 'users';

    protected $primaryKey = 'id';
    
    public function rank() 
    {
        return $this->hasOne(rank::class,'id', 'rank_id');
    }
   
    
}
