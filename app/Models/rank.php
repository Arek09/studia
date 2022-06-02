<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rank extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'rankName'
    ];

    protected $table = 'rank';

    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class,'rank_id');
       
    }
   
}
