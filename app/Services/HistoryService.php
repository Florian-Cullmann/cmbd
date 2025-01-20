<?php
namespace App\Services;

use App\Models\Staff;

class HistoryService
{
    /**
     * Get the initial weekly hours of the employee.
     *
     * @param Staff $staff
     * @return int|null
     */
    public function getInitialWeeklyHours(Staff $staff): ?int
    {
        // Retrieve the earliest history entry for the staff
        $initialEntry = $staff->history->sortBy('validFrom')->first();

        if ($initialEntry) {
            // Find the weeklyHours entry in the changed fields
            $initialWeeklyHours = $initialEntry->changedFields
                ->where('fieldName', 'weeklyHours')
                ->first()?->oldValue;

            // Return the initial weekly hours or fall back to the current value
            return $initialWeeklyHours ?: $staff->weeklyHours;
        }

        // If no history exists, fall back to the current weekly hours
        return $staff->weeklyHours;
    }
}
