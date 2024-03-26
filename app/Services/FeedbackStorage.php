<?php

namespace App\Services;

use App\Models\Feedback;

interface FeedbackStorage
{
    public function save(Feedback $feedback);
}
