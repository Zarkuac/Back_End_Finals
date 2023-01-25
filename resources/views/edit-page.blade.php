<!DOCTYPE html>
<html lang="en" class="w-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body >
    <form action="/edit-quiz/{{ $id }}" method="POST">
      @csrf
        <div>
          <label for="quizImage">სურათი:</label>
          <input name="image" type="text"  id="quizImage" value="{{$quiz->image}}">
        </div>
        <div>
          <label for="quizTitle">დასახელება:</label>
          <input name="title" type="text"  id="quizTitle" value="{{$quiz->title}}">
        </div>
        <div>
          <label for="quizDescription">აღწერა:</label>
          <textarea name="description"  id="quizDescription" rows="3" >{{$quiz->description}}</textarea>
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
  cursor: pointer;'>Submit</button>
      </form>

   
</body>
</html>