<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log-in</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <!-- خطوط جوجل -->
    <link
      href="https://fonts.googleapis.com/css?family=Reem+Kufi:regular,500,600,700"
      rel="stylesheet"
    />
    <style>
        *{
            padding: 0;
            margin:0;
            text-decoration:none;
        }

        body{
            font-family: "Reem Kufi", sans-serif;      
          }

          .main{
            text-align:center;
            padding:10px;
            margin:10px;
          }

          .main input , select {
            padding : 8px;
            margin :8px;
            background-color: #e8c39b;
            border:1px rgb(245,245,245);
            border:1px rgb(266,266,266) solid;
            outline:none;
            border-radius:3px;
          }

          input[type="submit"]{
            background-color: #e8c39b;
            width: 180px;
            font-size:17px;
            color:white;
            cursor:pointer;
          }

          input[type="submit"]:hover{

            background-color:brown;
          }

          #login{
            background-color: #e8c39b;
            color:white;
            padding:6px;
            margin:6px;
            border-radius:3px;
          }

          #login:hover{

            background-color:brown;
          }

          #error{
            background-color: #e8c39b;
            color:green;
            padding :4px;

          }
    </style>
</head>
<body>
    <div class="main">
    <h1>log in </h1>
    <form action="login.php" method="_POST" >
      <?php   if(isset($user_error)) {
        echo $user_error;
      }
      ?>
    <input type="text" name="username" id="username" placeholder="user name"><br>

    <?php   if(isset($pass_error)) {
        echo $pass_error;
      }
      ?>
    <input type="text" name="password" id="password" placeholder="password"><br>
    <input type="submit" name="submit" id="submit" value="تسجيل الدخول">
        </form>

    <h3>أو</h3>
         <a id ="login" href="register.php" class="submit">إنشاء حساب</a>
         </div>
</body>
</html>