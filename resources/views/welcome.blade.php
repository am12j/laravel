<!DOCTYPE html>
<html>

<head>

    <title>Rescue Management System</title>

    <style>

        body{

            margin:0;
            padding:0;
            font-family:Arial, sans-serif;
            background:linear-gradient(to right, #74ebd5, #ACB6E5);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;

        }

        .container{

            width:700px;
            background:white;
            padding:50px;
            border-radius:20px;
            text-align:center;
            box-shadow:0px 0px 25px rgba(0,0,0,0.3);

        }

        h1{

            color:#222;
            margin-bottom:20px;
            font-size:40px;

        }

        h3{

            color:#555;
            font-style:italic;
            margin-bottom:30px;
            line-height:30px;

        }

        p{

            color:#666;
            font-size:18px;
            line-height:30px;
            margin-bottom:40px;

        }

        button{

            padding:14px 35px;
            border:none;
            border-radius:10px;
            background:linear-gradient(to right, #ff9800, #ff5722);
            color:white;
            font-size:18px;
            cursor:pointer;
            transition:0.3s;

        }

        button:hover{

            transform:scale(1.05);
            box-shadow:0px 5px 15px rgba(0,0,0,0.3);

        }

        a{

            text-decoration:none;

        }

    </style>

</head>

<body>

    <div class="container">

        <h1>RESCUE MANAGEMENT SYSTEM</h1>

        <h3>
            “Saving lives is not just a responsibility,
            it is humanity in action.”
        </h3>

        <p>
            Welcome to the Rescue Management System.
            Manage emergency situations, rescue operations,
            rescue teams, and help requests efficiently.
        </p>

        <a href="/login">

            <button>
                Login
            </button>

        </a>

        &nbsp;&nbsp;&nbsp;

        <a href="/signup">

            <button>
                Signup
            </button>

        </a>

    </div>

</body>

</html>