<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[Fillable([
    'participant_id',
    'status',
    'started_at',
    'ended_at',
])]


class ParticipationPeriod extends Model
{
    public function participant(): BelongsTo
    {
        return $this->belongsTo(Participant::class);
    }

    public function desireBiography(): HasOne
    {
        return $this->hasOne(DesireBiography::class);
    }
}
