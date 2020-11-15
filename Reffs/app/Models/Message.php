<?php

namespace App\Models;

use App\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use UuidTrait;
    use HasFactory;
}
