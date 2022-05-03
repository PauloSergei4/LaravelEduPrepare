<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    protected $fillable = ['name'];
    use HasFactory;

    public function getRubricDate()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    public function posts()
    {
        return $this->hasMany('App/Post', 'rubric_id');
    }
}
