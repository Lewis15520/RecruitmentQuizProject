<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Services\Quizzes\CreateQuiz;
use App\Validators\Quizzes\CreateQuizValidator;

class QuizzesController extends Controller
{
    private const CREATE_QUIZ_SUCCESS = 'Successfully created the quiz: %s';

    private $createQuiz;
    private $createQuizValidator;

    public function __construct(CreateQuiz $createQuiz, CreateQuizValidator $createQuizValidator)
    {
        $this->createQuiz           = $createQuiz;
        $this->createQuizValidator  = $createQuizValidator;
    }

    public function getIndexView()
    {
        return view('panel.quizzes.index');
    }

    public function getCreateView()
    {
        return view('panel.quizzes.create');
    }

    public function createQuiz(Request $request)
    {
        $data = [
            'name'      => $request->input('name'),
            'content'   => $request->input('content')
        ];

        if ($this->createQuizValidator->setParameters($data)->fails())
            return redirect()->back()->with('errors', $this->createQuizValidator->getErrors());

        $this->createQuiz
            ->setName($data['name'])
            ->setContent(json_encode($data['content'], JSON_FORCE_OBJECT))
            ->setOwnerId(Auth::user()->id)
            ->setScope(strtolower('public'))
            ->save();

        return redirect()->back()->with('success', sprintf(self::CREATE_QUIZ_SUCCESS, $data['name']));
    }

}
