<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoryChangedFields extends Model
{
    protected $table = 'history_changed_fields';
    protected $fillable = ['historyId', 'subId', 'fieldName', 'oldValue', 'newValue'];

    public function history()
    {
        return $this->belongsTo(History::class, 'historyId');
    }
}
