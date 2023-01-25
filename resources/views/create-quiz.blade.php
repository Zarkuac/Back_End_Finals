<!DOCTYPE html>
<html lang="en" class="w-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
</head>
<body >
    <form action="/add-quiz" method="POST">
      @csrf
        <div>
          <tr> <td>
          <label for="quizImage">სურათი: </label>
          <input name="image" type="text" class="form-control" id="quizImage">
</td> </tr>
        </div>
        <div>
          <tr> <td>
          <label for="quizTitle">დასახელება:</label>
          <input name="title" type="text" class="form-control" id="quizTitle">
</td> </tr></div>
        <div>
          <label for="quizDescription">აღწერა:</label>
          <textarea name="description" class="form-control" id="quizDescription" rows="3"></textarea>
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