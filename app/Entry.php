<?php

namespace App;

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setTituloAttribute($value)
    { 
        $this->attributes['titulo'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    
    public function getUrl()
    {
        return route('entries.show',$this->slug.'-'.$this->id);
    }
}
