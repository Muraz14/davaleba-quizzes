<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <style>* { margin:0; padding: 0; } body { font-family: sans-serif; padding: 50px 150px; } .quiz { margin-bottom: 70px; } .quiz-img { width: 400px; height: 300px; object-fit: cover; } .quiz-noimg { width: 400px; height: 300px; display: flex; align-items: center; justify-content: center; color: #fff; background-color: purple; } .status { margin-bottom:10px; color: white; width: 140px; height: 30px; border-radius: 5px; text-align: center; line-height: 30px;} .status.--active { background-color: green; } .status.--inactive { background-color: red; } </style>
    </head>
    <body>
        @foreach ($quizzes as $quiz)
            <div class="quiz">
                <h2>{{ $quiz->title }}</h2>
                @if ($quiz->status)
                    <div class="status --active">Active</div>
                @else
                    <div class="status --inactive">Inactive</div>
                @endif

                <p>{{ $quiz->description }}</p>
                
                @if ($quiz->image)
                    <img src="{{ $quiz->image }}" class="quiz-img">
                @else
                    <div class="quiz-noimg">No photo</div>
                @endif
            </div>
        @endforeach
    </body>
</html>
