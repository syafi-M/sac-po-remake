<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoLoker extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'province',
        'position',
        'count',
        'is_active',
        'expiry_date',
        'description',
    ];

    protected $casts = [
        'count' => 'integer',
        'is_active' => 'boolean',
        'expiry_date' => 'date',
    ];

    // Scope to get only active vacancies
    public function scopeActive($query)
    {
        return $query->where('is_active', true)
                    ->where(function($q) {
                        $q->whereNull('expiry_date')
                          ->orWhere('expiry_date', '>=', now());
                    });
    }

    // Scope to get vacancies by city
    public function scopeByCity($query, $city)
    {
        return $query->where('city', $city);
    }

    // Scope to get vacancies by job type
    public function scopeByJobType($query, $jobType)
    {
        return $query->where('position', $jobType);
    }

    // Get unique cities with vacancies
    public static function getUniqueCities()
    {
        return self::active()
                    ->select('city', 'province')
                    ->distinct()
                    ->orderBy('city')
                    ->get();
    }

    // Get unique job types
    public static function getUniqueJobTypes()
    {
        return self::active()
                    ->select('position')
                    ->distinct()
                    ->orderBy('position')
                    ->pluck('position');
    }
}
