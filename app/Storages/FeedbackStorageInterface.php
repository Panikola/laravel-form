<?php

namespace App\Storages;

use App\Models\Feedback;

interface FeedbackStorageInterface
{
    public function save(Feedback $feedback);
}
