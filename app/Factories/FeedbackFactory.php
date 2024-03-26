<?php

namespace App\Factories;


use App\Models\Feedback;

class FeedbackFactory
{
    public static function create($fields): Feedback
    {
        return new Feedback($fields);
    }
}
