<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Document extends Model
{
    use HasFactory;

    public static function Boot()
    {
        parent::boot();

        static::updating(function ($document) {
            $document->adjustments->attach(Auth::id());
        });
    }

    public function adjustments()
    {
        return $this->belongsToMany(User::class, 'adjustments')
            ->withTimestamps()
            ->latest('pivot_updated_at');
    }
}
