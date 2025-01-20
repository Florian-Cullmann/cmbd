<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model {
    protected $table = 'history';
    public $timestamps = false;

    protected $casts = [
        'validFrom' => 'date',
        'validTo' => 'date',
        'changeDate' => 'datetime',
    ];

    protected $fillable = [
        'staffId', 'validFrom', 'validTo', 'changeDate', 'changeUser', 'changeName'
    ];

    public function changedFields()
    {
        return $this->hasMany(HistoryChangedFields::class, 'historyId');
    }
}
