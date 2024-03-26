<?php

return [
    'storage' => [
        'database' => env('FEEDBACK_STORAGE_DATABASE', true),
        'file' => env('FEEDBACK_STORAGE_FILE', true),
    ],
    'file_storage_path' => env('FEEDBACK_FILE_STORAGE_PATH', 'feedback.json'),
];
