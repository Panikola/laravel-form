<?php

namespace App\Services;

use App\Factories\FeedbackFactory;
use App\Models\Feedback;
use App\Storages\FeedbackStorageInterface;

class FeedbackService
{
    private FeedbackStorageInterface $storage;
    private FeedbackFactory $factory;

    public function __construct(FeedbackStorageInterface $storage, FeedbackFactory $factory)
    {
        $this->storage = $storage;
        $this->factory = $factory;
    }


    public function create(array $data): Feedback
    {
        $feedback = $this->factory->create($data);
        $this->storage->save($feedback);
        return $feedback;
    }
}
