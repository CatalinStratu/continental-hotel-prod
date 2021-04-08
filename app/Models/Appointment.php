<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table="appointments";

    protected $fillable = [
        'start',
        'end',
        'description',
        'status',
        'client_id',
        'type_id',
        'room_id',
    ];

    protected $dates = [
        'start',
        'end',
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'title'
    ];

    public function client() {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function type() {
        return $this->belongsTo(RoomType::class,'type_id');
    }

    public function room() {
        return $this->belongsTo(Room::class, 'room_id');
    }
}
