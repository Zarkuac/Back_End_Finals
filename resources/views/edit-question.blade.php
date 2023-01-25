<!DOCTYPE html>
<html lang="en" class="w-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
</head>
<body >
    <form action="/edit-question-post/{{ $id }}" method="POST">
      @csrf
      <div id="question-container">
        <div >
          <label for="question">კითხვა</label>
          <input name='question' type="text" id="question" value="{{ $question->question }}"></input>
          <label for="image">სურათი</label>
          <input name='image' type="text"  id="image" value="{{ $question->image }}"></input>
          <label for="position">პოზიცია</label>
          <input name='position' type="number"  id="position" value="{{ $question->position }}"></input>

          <div class="answer-cont">
            <label for="answers" >პასუხები</label>
            <input name='answer1' type="text"  id="answer" value="{{ json_decode($question->answers)[0]->text }}"></input>
            <input name='answer2' type="text"  id="answer" value="{{  json_decode($question->answers)[1]->text }}"></input>
            <input name='answer3' type="text"  id="answer" value="{{  json_decode($question->answers)[2]->text }}"></input>
            <input name='answer4' type="text"  id="answer" value="{{  json_decode($question->answers)[3]->text}}"></input>
            <label for="answers" >სწორი პასუხი</label>
            <input name='correct_answer' type="text"  id="answer" value="{{ $question->correct_answer }}"></input>
          </div>
          <label for="parent_quiz">Quiz</label>
            <select name="parent_quiz" id="parent_quiz" >
                @foreach($quizzes as $quiz)
                    <option value='{{ $quiz->id }}'>{{ $quiz->title }}</option>
                @endforeach
            </select>
        </div>
      </div>
          <button type="submit"
          style='background-color: #4CAF50; 
  border: none;
  border-radius: 12px;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;' >Submit</button>
          <div>
            <a href="/" id='add-question-button'>დასრულება</a>
          </div>
      </form>

   
</body>
</html>