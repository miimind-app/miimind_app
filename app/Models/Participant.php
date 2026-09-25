<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['reference'])]
class Participant extends Model
{
    public function participationPeriods(): HasMany
    {
        return $this->hasMany(ParticipationPeriod::class);
    }
}
