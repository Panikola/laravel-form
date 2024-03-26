<?php

namespace App\Services;

use App\Models\Feedback;

class DualFeedbackStorage implements FeedbackStorage
{
    private FeedbackStorage $storage1;
    private FeedbackStorage $storage2;

    public function __construct(FeedbackStorage $storage1, FeedbackStorage $storage2)
    {
        $this->storage1 = $storage1;
        $this->storage2 = $storage2;
    }

    public function save(Feedback $feedback): void
    {
        $this->storage1->save($feedback);
        $this->storage2->save($feedback);
    }
}
