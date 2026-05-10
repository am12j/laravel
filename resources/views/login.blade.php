<!DOCTYPE html>
<html>

<head>

    <title>Login</title>

    <style>

        body{

            margin:0;
            padding:0;
            font-family:Arial, sans-serif;
            background:linear-gradient(to right, #4facfe, #00f2fe);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;

        }

        .login-box{

            width:400px;
            background:white;
            padding:40px;
            border-radius:20px;
            text-align:center;
            box-shadow:0px 0px 25px rgba(0,0,0,0.3);

        }

        h1{

            color:#222;
            margin-bottom:15px;

        }

        p{

            color:#666;
            margin-bottom:30px;
            font-style:italic;

        }

        input{

            width:100%;
            padding:14px;
            margin-top:15px;
            border:1px solid #ccc;
            border-radius:10px;
            font-size:16px;
            box-sizing:border-box;
            outline:none;
            transition:0.3s;

        }

        input:focus{

            border-color:#007bff;
            box-shadow:0px 0px 8px rgba(0,123,255,0.3);

        }

        button{

            width:100%;
            padding:14px;
            margin-top:25px;
            border:none;
            border-radius:10px;
            background:linear-gradient(to right, #ff9800, #ff5722);
            color:white;
            font-size:18px;
            cursor:pointer;
            transition:0.3s;

        }

        button:hover{

            transform:scale(1.03);
            box-shadow:0px 5px 15px rgba(0,0,0,0.3);

        }

        a{

            text-decoration:none;
            color:#007bff;
            font-weight:bold;

        }

        a:hover{

            text-decoration:underline;

        }

    </style>

</head>

<body>

    <div class="login-box">

        <h1>LOGIN</h1>

        <p>
            “Every rescue begins with a single response.”
        </p>

        <form method="POST" action="/check">

            @csrf

            <input
                type="text"
                name="username"
                placeholder="Enter Username"
                required
            >

            <input
                type="password"
                name="password"
                placeholder="Enter Password"
                required
            >

            <button type="submit">
                Login
            </button>

        </form>

        <br>

        <a href="/signup">
            Create New Account
        </a>

    </div>

</body>

</html>