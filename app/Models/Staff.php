<?php
namespace App\Models;

use App\Services\HistoryService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Staff extends Model {
    protected $table = 'staff';
    protected $primaryKey = 'staffId';
    public $timestamps = false;

    protected $casts = [
        'startDate' => 'date',
        'endDate' => 'date',
        'insertDate' => 'datetime',
        'updateDate' => 'datetime',
    ];

    protected $fillable = [
        'birthday', 'birthPlace', 'birthName', 'gender', 'firstName',
        'lastName', 'steuerId', 'startDate', 'endDate', 'endReason',
        'weeklyHours', 'insertedBy', 'insertDate', 'updatedBy', 'updateDate'
    ];

    public function getLastChangeDateAttribute()
    {
        return $this->history->sortByDesc('changeDate')->first()?->changeDate;
    }

    public function getInitialWeeklyHoursAttribute(): ?int
    {
        $historyService = new HistoryService();

        return $historyService->getInitialWeeklyHours($this);
    }


    public function history(): HasMany
    {
        return $this->hasMany(History::class, 'staffId', 'staffId');
    }
}
