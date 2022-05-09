<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
//цим ми дозволяємо масово змінювати тільки вказані поля:
    protected $fillable = ['title','content', 'rubric_id', 'image'];

    public function getPostDate()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    public function rubric()
    {
        return $this->belongsTo(Rubric::class, 'rubric_id');
    }
}
