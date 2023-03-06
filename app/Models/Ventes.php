<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventes extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false) {
            $query->where(
                'etiquettes',
                'like',
                '%' . request('tag') . '%'
            );
        }

        if ($filters['search'] ?? false) {
            $query->where(
                'titre',
                'like',
                '%' . request('search') . '%'
            )
            ->orWhere(
                'etiquettes',
                'like',
                '%' . request('search') . '%'
            )
            ->orWhere(
                'description',
                'like',
                '%' . request('search') . '%'
            )
            ->orWhere(
                'vendeur',
                'like',
                '%' . request('search') . '%'
            )
            ->orWhere(
                'localisation',
                'like',
                '%' . request('search') . '%'
            );
        }
    }
}
