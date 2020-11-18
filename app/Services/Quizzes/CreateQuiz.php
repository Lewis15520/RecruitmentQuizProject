<?php

namespace App\Services\Quizzes;

use App\Models\Quiz;

class CreateQuiz
{
    private $quiz;
    private $ownerId;

    public function __construct()
    {
        $this->quiz = new Quiz;
    }

    public function setName(string $name): self
    {
        $this->quiz->name = $name;
        return $this;
    }

    public function setContent($content): self
    {
        $this->quiz->content = $content;
        return $this;
    }

    public function setOwnerId(int $ownerId): self
    {
        $this->ownerId          = $ownerId;
        $this->quiz->owner_id   = $ownerId;
        return $this;
    }

    public function setScope(string $scope): self
    {
        $this->quiz->scope = $scope;
        return $this;
    }

    public function save()
    {
        $this->quiz->alpha_id = $this->generateAlphaId();
        while (Quiz::where('alpha_id', $this->quiz->alpha_id)->exists()) {
            $this->quiz->alpha_id = $this->generateAlphaId();
        }
        $this->generateAlphaId();
        $this->quiz->save();
        $this->attachToUser();
    }

    private function generateAlphaId(int $length = 20): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    private function attachToUser()
    {
        $this->quiz->users()->attach($this->ownerId);
    }
}
