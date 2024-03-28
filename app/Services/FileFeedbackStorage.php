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
        $directory = dirname($this->filePath);

        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        if (!file_exists($this->filePath)) {
            touch($this->filePath);
        }

        $data = json_encode([
            'name' => $feedback->name,
            'phone' => $feedback->phone,
            'message' => $feedback->message,
            'date' => date('Y-m-d H:i:s'),
        ]);

        file_put_contents($this->filePath, $data . PHP_EOL, FILE_APPEND);
    }
}
