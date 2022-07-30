<?php

namespace App\Models\api\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use const http\Client\Curl\POSTREDIR_301;

class Tag extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'status',
    ];

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
