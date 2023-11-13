<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;
    protected $fillable = ['name','image'];
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
