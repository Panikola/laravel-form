<?php

namespace App\Storages;

use App\Models\Feedback;

class DatabaseFeedbackStorage implements FeedbackStorageInterface
{
    public function save(Feedback $feedback): void
    {
        $feedback->save();
    }
}
