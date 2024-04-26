<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use App\Services\FeedbackService;
use Illuminate\Http\JsonResponse;

class FeedbackController extends Controller
{
    private FeedbackService $service;

    public function __construct(FeedbackService $service)
    {
        $this->service = $service;
    }

    public function store(StoreFeedbackRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $feedback = $this->service->create($validated);

        return response()->json(['message' => 'Feedback saved successfully.']);
    }
}
