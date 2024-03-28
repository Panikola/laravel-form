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
        if (!file_exists($this->filePath)) {
            touch($this->filePath);
            file_put_contents($this->filePath, json_encode([])); // инициализируем файл пустым массивом
        }

        // считываем существующие данные
        $data = json_decode(file_get_contents($this->filePath), true);

        // добавляем новый отзыв
        $data[] = [
            'name' => $feedback->name,
            'phone' => $feedback->phone,
            'message' => $feedback->message,
            'date' => date('Y-m-d H:i:s'),
        ];

        // записываем обновленные данные обратно в файл
        file_put_contents($this->filePath, json_encode($data));
    }
}
