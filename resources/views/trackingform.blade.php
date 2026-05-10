<!DOCTYPE html>
<html>

<head>

    <title>Tracking</title>

    <style>

        body{

            margin:0;
            font-family:Arial, sans-serif;
            background:linear-gradient(to right, #74ebd5, #ACB6E5);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;

        }

        .tracking-box{

            width:450px;
            background:white;
            padding:40px;
            border-radius:15px;
            box-shadow:0px 0px 20px rgba(0,0,0,0.2);
            text-align:center;

        }

        .tracking-box h1{

            margin-bottom:15px;
            color:#333;

        }

        .tracking-box p{

            color:gray;
            margin-bottom:25px;

        }

        input{

            width:100%;
            padding:14px;
            border:1px solid #ccc;
            border-radius:8px;
            font-size:16px;
            box-sizing:border-box;
            outline:none;

        }

        input:focus{

            border-color:#007bff;

        }

        button{

            width:100%;
            margin-top:20px;
            padding:14px;
            border:none;
            background:#007bff;
            color:white;
            font-size:18px;
            border-radius:8px;
            cursor:pointer;
            transition:0.3s;

        }

        button:hover{

            background:#0056b3;

        }

    </style>

</head>

<body>

    <div class="tracking-box">

        <h1>Track Complaint</h1>

        <p>
            Enter your name to check complaint status
        </p>

        <form action="/trackingsearch" method="POST">

            @csrf

            <input
                type="text"
                name="name"
                placeholder="Enter Your Name"
                required
            >

            <button type="submit">
                Track Now
            </button>

        </form>

    </div>

</body>

</html>