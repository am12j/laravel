<!DOCTYPE html>
<html>

<head>

    <title>Dashboard</title>

    <style>

        body{

            margin:0;
            font-family:Arial, sans-serif;
            background:linear-gradient(to right,#dfe9f3,#ffffff);

        }

        .navbar{

            background:#111;
            padding:20px;
            text-align:center;
            box-shadow:0px 2px 10px rgba(0,0,0,0.3);

        }

        .navbar a{

            color:white;
            text-decoration:none;
            margin:25px;
            font-size:19px;
            transition:0.3s;
            font-weight:bold;

        }

        .navbar a:hover{

            color:orange;

        }

        .main{

            display:flex;
            justify-content:center;
            align-items:center;
            padding:30px;

        }

        .chatbox{

            width:520px;
            background:white;
            padding:30px;
            border-radius:20px;
            box-shadow:0px 5px 20px rgba(0,0,0,0.2);
            text-align:center;

        }

        .chatbox h1{

            color:#222;
            margin-bottom:10px;

        }

        .chatbox p{

            color:gray;
            margin-bottom:20px;
            line-height:25px;

        }

        .messages{

            background:#f7f7f7;
            border-radius:12px;
            padding:15px;
            max-height:180px;
            overflow-y:auto;
            margin-bottom:20px;
            text-align:left;

        }

        .user-msg{

            background:#d1ecf1;
            padding:12px;
            border-radius:10px;
            margin-bottom:12px;
            box-shadow:0px 2px 5px rgba(0,0,0,0.1);

        }

        .bot-msg{

            background:#ececec;
            padding:12px;
            border-radius:10px;
            margin-bottom:12px;
            box-shadow:0px 2px 5px rgba(0,0,0,0.1);

        }

        form{

            margin-top:15px;

        }

        input{

            width:85%;
            padding:14px;
            border:1px solid #bbb;
            border-radius:10px;
            outline:none;
            font-size:16px;
            transition:0.3s;

        }

        input:focus{

            border-color:orange;
            box-shadow:0px 0px 8px rgba(255,165,0,0.5);

        }

        button{

            margin-top:18px;
            padding:12px 30px;
            background:orange;
            border:none;
            color:white;
            font-size:17px;
            border-radius:10px;
            cursor:pointer;
            transition:0.3s;
            font-weight:bold;

        }

        button:hover{

            background:darkorange;
            transform:scale(1.03);

        }

        .footer{

            background:#111;
            padding:25px;
            display:flex;
            justify-content:center;
            gap:20px;
            flex-wrap:wrap;

        }

        .footer img{

            width:180px;
            height:120px;
            object-fit:cover;
            border-radius:12px;
            transition:0.3s;
            box-shadow:0px 3px 10px rgba(0,0,0,0.3);

        }

        .footer img:hover{

            transform:scale(1.06);

        }

    </style>

</head>

<body>

    <div class="navbar">

        <a href="/dashboard">Home</a>
        <a href="/tracking">Tracking</a>
        <a href="/au">About Us</a>

    </div>

    <div class="main">

        <div class="chatbox">

            <h1>Disaster Help Chatbot</h1>

            <p>
                Ask for precautions, rescue help,
                emergency numbers, and disaster guidance.
            </p>

            <div class="messages">

                @if(isset($message))

                    <div class="user-msg">

                        <b>You:</b><br><br>

                        {{ $message }}

                    </div>

                @endif

                @if(isset($answer))

                    <div class="bot-msg">

                        <b>Bot:</b><br><br>

                        {{ $answer }}

                    </div>

                @endif

            </div>

            <form action="/help" method="POST">

                @csrf

                <input
                    type="text"
                    name="message"
                    placeholder="Type the help you need..."
                    required
                >

                <br>

                <button type="submit">

                    Send

                </button>

            </form>

            <br>

            <a href="/rc">

                <button type="button">

                    Click To Register Complaint

                </button>

            </a>

        </div>

    </div>

    <div class="footer">

        <img src="flood.png" alt="Flood">

        <img src="cyclone.png" alt="Cyclone">

        <img src="fire.png" alt="Fire">

        <img src="earthquake.png" alt="Earthquake">

    </div>

</body>

</html>