<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Master Era</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial,sans-serif;
        }

        body{
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
            background:#f5f7fb;
        }

        .login-box{
            width:400px;
            background:white;
            padding:40px;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,.1);
        }

        h2{
            text-align:center;
            margin-bottom:30px;
            color:#0b1f4d;
        }

        input{
            width:100%;
            padding:15px;
            margin-bottom:20px;
            border:1px solid #ddd;
            border-radius:10px;
            outline:none;
        }

        button{
            width:100%;
            padding:15px;
            border:none;
            background:#ff914d;
            color:white;
            border-radius:10px;
            cursor:pointer;
            font-size:16px;
        }

        button:hover{
            opacity:.9;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Master Era Admin Login</h2>

    <form action="login_process.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>