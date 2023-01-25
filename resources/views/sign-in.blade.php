<!DOCTYPE html>
<html lang="en" class="bg-dark h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body >
    <p style='font-weight: bold; font-size: 30px
    '>Enter your email and password to login!</p>

     <form method="POST" action="/login">
         @csrf
         <div  method="POST" action="/login">
            <tr> 
             <td> <label for="email-input">Email Address:</label> </td>
             <input name="email" type="text" class="form-control" id="username-input">
</tr>
            </div>
         <div>
<tr>
           <td>  <label for="exampleInputPassword1">Password:</label> </td>
             <input name="password" type="password" id="exampleInputPassword1">
</tr>     </div>
         <button type="submit" >Login</button>
     </form>

      
</body>
</html>