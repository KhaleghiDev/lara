<?php

namespace App\Models\api\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class postTag extends Model
{
    use HasFactory, SoftDeletes;
 protected $table="	post_tags";
    protected $fillable = [
        'tag_id',
        'post_id',
    ];
}
