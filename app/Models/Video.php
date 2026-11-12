<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Video extends Model
{
public $incrementing = false;
protected $keyType = 'string';

protected static function booted()
{
    static::creating(function ($video) {
        do {
            $id = '';
            $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789'; // no 0
            for ($i = 0; $i < 5; $i++) $id .= $chars[random_int(0, strlen($chars) - 1)];
        } while (self::where('id', $id)->exists());
        $video->id = $id;
    });
}

protected function casts(): array
{
    return [
        'tags' => 'array',
    ];
}

public function user()
{
    return $this->belongsTo(User::class);
}

}
