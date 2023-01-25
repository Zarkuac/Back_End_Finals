<!doctype html>
<html lang="en">

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
  
  <header>
    
    <nav >
      <div >
          @if(Auth::check())
          <form  method="POST" action="/logout">
            @csrf
            <a id="sign-in-btn"  href="/account"
            style='background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;'>Admin Dashboard</a>
            <button type='submit' id="register-btn"
            style='background-color: #f44336; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;'>Log out</button>
          </form>
          @else
          <form >
            <a id="sign-in-btn"  href="/sign-in" style='color:red; 
            font-weight: bold;font-size:30px;'>Log In</a>
            <a id="register-btn"  href="/register"
            style='font-weight: bold; font-size:30px;'>Register</a>
          </form>
          @endif
        </div>
      </div>
    </nav>
  </header>


          <div >
              <a type="button" href='/create-quiz'
              style='border-radius: 50%;
               background-color: #008CBA; 
               border: none;
               color: white;
               padding: 20px;
               text-align: center;
               text-decoration: none;
               display: inline-block;
               font-size: 16px;
               margin: 4px 2px;
               cursor: pointer;'>Create New Quizz</a>
          
          </div>

   <div id="quiz-go" style="display:flex; flex-direction:column;">
    @foreach($quizzes as $quiz)
      <div >
        <div >
          <img src="{{ $quiz->image }}" style='height: 250px' alt="Card image cap">
          <div >
            <a href="{{ route('single-quiz', ['id' => $quiz->id]) }}"><h5 class="card-title">{{ $quiz->title }}</h5></a>
            <p class="card-text">{{ $quiz->description }}</p>
          </div>
          <div >
            <small >კითხვების რაოდენობა: {{ $questions->where('quiz_id', $quiz->id)->count() }}</small>
          </div>
        </div>
        @endforeach
   </div>
  </main>
  <footer>
  </footer>

  
</body>

</html>