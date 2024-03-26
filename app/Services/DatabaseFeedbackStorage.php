<?php

namespace App\Services;

use App\Models\Feedback;

class DatabaseFeedbackStorage implements FeedbackStorage
{
    public function save(Feedback $feedback): void
    {
        $feedback->save();
    }
}
