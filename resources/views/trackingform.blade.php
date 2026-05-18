<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking - Rescue Management System</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="navbar">
        <a href="/dashboard">Home</a>
        <a href="/tracking">Tracking</a>
        <a href="/au">About Us</a>
    </div>

    <div class="center-content">
        <div class="glass-panel">
            <h1>Track Complaint</h1>
            <p>Enter your name to check the current status of your complaint</p>

            <form action="/trackingsearch" method="POST" autocomplete="off">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" placeholder="Enter Your Name" required autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Enter Your Email" required autocomplete="off">
                </div>
                <button type="submit" class="btn-primary btn-block">Track Now</button>
            </form>
        </div>
    </div>
</body>
</html>