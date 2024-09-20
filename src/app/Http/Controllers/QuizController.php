<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Save;

class QuizController extends Controller
{
    public function index() {
        return view('index');
    }

    public function processForm(Request $request)
    {
        $data = $request->all();
        $recommendedHobbies = $this->suggestHobbies($data);

        session([
            'mostRecommendedHobby' => $recommendedHobbies[0]['name'] ?? 'なし',
            'otherRecommendedHobbies' => array_slice($recommendedHobbies, 1)
        ]);

        return view('result', [
            'mostRecommendedHobby' => session('mostRecommendedHobby'),
            'otherRecommendedHobbies' => session('otherRecommendedHobbies')
        ]);
    }

    public function saveHobbies(Request $request)
    {
        $mostRecommendedHobby = $request->input('mostRecommendedHobby');
        $otherRecommendedHobbies = $request->input('otherRecommendedHobbies', []);

        $userId = Auth::id();

        Save::updateOrCreate(
            ['user_id' => $userId],
            [
                'most_recommended_hobby' => $mostRecommendedHobby,
                'other_recommended_hobbies' => json_encode($otherRecommendedHobbies)
            ]
        );

        $request->session()->forget(['mostRecommendedHobby', 'otherRecommendedHobbies']);

        return redirect()->route('quiz.index')->with('success', '趣味が保存されました');
    }

    private function suggestHobbies($answers)
    {
        $hobbies = DB::table('hobbies')
            ->select('name', 'question_1', 'question_2', 'question_3')
            ->get();

        $hobbyScores = [];
        foreach ($hobbies as $hobby) {
            $score = 0;
            if ($hobby->question_1 === $answers['question_1']) {
                $score++;
            }
            if ($hobby->question_2 === $answers['question_2']) {
                $score++;
            }
            if ($hobby->question_3 === $answers['question_3']) {
                $score++;
            }
            $hobbyScores[] = [
                'name' => $hobby->name,
                'score' => $score
            ];
        }

        usort($hobbyScores, function($a, $b) {
            return $b['score'] - $a['score'];
        });

        usort($hobbyScores, function($a, $b) {
            return $a['score'] === $b['score'] ? strcmp($a['name'], $b['name']) : $b['score'] - $a['score'];
        });

        $allMatch = array_filter($hobbyScores, function($hobby) {
            return $hobby['score'] === 3;
        });

        $partialMatch = array_filter($hobbyScores, function($hobby) {
            return $hobby['score'] === 2;
        });

        $partialMatch = array_values($partialMatch);
        shuffle($partialMatch);
        $partialMatch = array_slice($partialMatch, 0, 3);

        $recommendedHobbies = array_merge(array_values($allMatch), $partialMatch);

        return $recommendedHobbies;
    }
}
