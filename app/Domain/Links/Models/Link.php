<?php

namespace App\Domain\Links\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['chat_id', 'url'];
}
