<?php

namespace App\Storages;

use App\Models\Feedback;

class DualFeedbackStorage implements FeedbackStorageInterface
{
    private FeedbackStorageInterface $storage1;
    private FeedbackStorageInterface $storage2;

    public function __construct(FeedbackStorageInterface $storage1, FeedbackStorageInterface $storage2)
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
