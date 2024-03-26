<?php

namespace App\Services;

use App\Models\Feedback;

class FileFeedbackStorage implements FeedbackStorage
{
    protected string $filePath;

    public function __construct()
    {
        $this->filePath = storage_path(config('feedback.file_storage_path'));
    }

    public function save(Feedback $feedback): void
    {
        $data = [
            'name' => $feedback->name,
            'phone' => $feedback->phone,
            'message' => $feedback->message,
        ];

        file_put_contents($this->filePath, json_encode($data) . PHP_EOL, FILE_APPEND);
    }
}
