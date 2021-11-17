<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    
    public function likes() {
        return $this->belongsTo(Like::class,'');
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function tags() {
        return $this->belongsToMany(Tag::class, 'note_id', 'note_tags');
    }
    
}
