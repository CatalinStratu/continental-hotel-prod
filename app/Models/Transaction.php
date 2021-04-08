<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table="transactions";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'room_id',
        'type_id',
        'price',
        'status',
    ];

    public function room()
    {
        return $this->hasMany(Room::class, 'room_id')->orderBy('id', 'desc');
    }

    public function room_type()
    {
        return $this->hasMany(RoomType::class, 'type_id')->orderBy('id', 'desc');
    }
}
