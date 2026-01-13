<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    use HasFactory;

    protected $fillable = ['lead_id', 'status', 'called_at', 'twilio_sid'];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
}
