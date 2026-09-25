<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'participation_period_id',
    'body',
    'submitted_at',
])]

class DesireBiography extends Model
{
    public function participationPeriod(): BelongsTo
    {
        return $this->belongsTo(ParticipationPeriod::class);
    }
}
