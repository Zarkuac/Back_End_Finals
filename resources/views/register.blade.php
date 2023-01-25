<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
</head>
<body>
    <section>
        <div >

           <form method="POST" action="/sign-up">
             @csrf
           <table>
            <tr>
                <td>
                  Full Name:
</td>
              <td>
              <input name="name" placeholder="Full name" type="text">
             </td>
</tr>

<tr>
  <td> Email Address: </td>
  <td>
              <input name="email" placeholder="E-Mail" type="email">
</td>
</tr>
<tr>         
<td> Password:</td>
<td>
              <input name="password" placeholder="Create password" type="password">
</td>
</tr>        
<tr>
  <td> Repeat Password:</td>
  <td>
              <input name="password_confirmation" placeholder="Repeat password" type="password">
</td> 
</tr>
<tr>
  <td>
              <button type="submit" > Create Account </button> </td>
</tr>           </div>

<tr> <td>
               <a style='color:red;font-weight: bold;' href="/sign-in">Log In</a> </td> </tr>
             </p>
           </form>
        
        </div>
     </section>

   
</body>
</html>