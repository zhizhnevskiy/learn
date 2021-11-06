<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App
 * @mixin Builder
 */

class Post extends Model
{
//    rename table
//    protected $table = 'posts';

//    rename id
//    protected $primaryKey = 'posts_id';

//    delete auto increment
//    public $incrementing = false;

//     change type
//     protected $keyType = 'string';

//     not set time
//     public $timestamps = false;

//     auto set data

//    protected $attributes = [
//        'content' => 'Lorem ipsum from Post Model',
//    ];

    protected $fillable = ['title','content'];

}
