<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model

{
    protected $table = 'create_user';
    use HasFactory;

    protected $fillable = [
    "nameJob",
    "fullname",
    "level",    
    "age",
    "quanlity"];
}
