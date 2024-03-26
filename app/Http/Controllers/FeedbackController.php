<?php

namespace App\Http\Controllers;

use App\Factories\FeedbackFactory;
use App\Http\Requests\StoreFeedbackRequest;
use App\Services\FeedbackStorage;

class FeedbackController extends Controller
{
    private FeedbackStorage $storage;
    private FeedbackFactory $factory;

    public function __construct(FeedbackStorage $storage, FeedbackFactory $factory)
    {
        $this->storage = $storage;
        $this->factory = $factory;
    }

    public function store(StoreFeedbackRequest $request)
    {
        $validated = $request->validated();

        $feedback = $this->factory->create($validated);
        $this->storage->save($feedback);

        return response()->json(['message' => 'Feedback saved successfully.']);
    }
}
