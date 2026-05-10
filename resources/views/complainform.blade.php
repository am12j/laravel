<!DOCTYPE html>
<html>

<head>

    <title>Complaint Form</title>

    <style>

        body{

            margin:0;
            font-family:Arial;
            background:#f4f4f4;

        }

        .container{

            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;

        }

        .form-box{

            width:500px;
            background:white;
            padding:35px;
            border-radius:15px;
            box-shadow:0px 0px 15px rgba(0,0,0,0.2);

        }

        .form-box h1{

            text-align:center;
            margin-bottom:25px;

        }

        input, textarea{

            width:100%;
            padding:12px;
            margin-top:15px;
            border:1px solid gray;
            border-radius:8px;
            font-size:16px;
            box-sizing:border-box;

        }

        textarea{

            height:120px;
            resize:none;

        }

        .status{

            background:#e9e9e9;
            cursor:not-allowed;

        }

        button{

            width:100%;
            padding:14px;
            margin-top:20px;
            background:orange;
            color:white;
            border:none;
            border-radius:8px;
            font-size:18px;
            cursor:pointer;

        }

        button:hover{

            background:darkorange;

        }

    </style>

</head>

<body>

    <div class="container">

        <div class="form-box">

            <h1>Register Complaint</h1>

            <form action="/sc" method="POST">

                @csrf

                <input
                    type="text"
                    name="name"
                    placeholder="Enter Your Name"
                    required
                    pattern="[A-Za-z ]{3,30}"
                    title="Name should contain only letters and spaces"
                >

                <input
                    type="text"
                    name="phone"
                    placeholder="Enter Phone Number"
                    required
                    pattern="[0-9]{10}"
                    title="Phone number must contain exactly 10 digits"
                >

                <input
                    type="email"
                    name="email"
                    placeholder="Enter Email"
                    required
                    title="Enter a valid email address"
                >

                <input
                    type="text"
                    name="pin"
                    placeholder="Enter Area PIN Code"
                    required
                    pattern="[0-9]{6}"
                    title="PIN code must contain exactly 6 digits"
                >
                <textarea
                    name="address"
                    placeholder="Enter Full Address"
                    required
                    title="Enter complete address">
                </textarea>
                <textarea
                    name="complaint"
                    placeholder="Describe Your Complaint"
                    required
                    title="Enter your complaint"
                ></textarea>

                <input
                    type="text"
                    name="status"
                    value="Unresolved"
                    readonly
                    class="status"
                >

                <button type="submit">
                    Submit Complaint
                </button>

            </form>

        </div>

    </div>

</body>

</html>