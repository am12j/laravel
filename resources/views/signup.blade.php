<!DOCTYPE html>
<html>

<head>

    <title>Signup</title>

    <style>

        body{

            margin:0;
            padding:0;
            font-family:Arial, sans-serif;
            background:linear-gradient(to right, #43cea2, #185a9d);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;

        }

        .signup-box{

            width:420px;
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

            border-color:#28a745;
            box-shadow:0px 0px 8px rgba(40,167,69,0.3);

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

    </style>

</head>

<body>

    <div class="signup-box">

        <h1>Signup</h1>

        <p>
            Create your rescue management account
        </p>

        <form method="POST" action="/submit">

            @csrf

            <input
                type="text"
                name="username"
                placeholder="Enter Username"
                required
                pattern="[A-Za-z0-9]{3,20}"
                title="Username should contain 3 to 20 letters or numbers"
            >

            <input
                type="email"
                name="email"
                placeholder="Enter Email"
                required
                title="Enter a valid email address"
            >

            <input
                type="password"
                name="password"
                placeholder="Enter Password"
                required
                pattern=".{6,}"
                title="Password must contain at least 6 characters"
            >

            <button type="submit">
                Signup
            </button>

        </form>

    </div>

</body>

</html>