<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Rescue Management System </title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="center-content">
        <div class="glass-panel">
            <h1>LOGIN</h1>
            <p>“Every rescue begins with a single response.”</p>
            
            <form method="POST" action="/check" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter Username" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password" required autocomplete="new-password">
                </div>
                <button type="submit" class="btn-primary btn-block">Login</button>
            </form>
            
            <div style="margin-top: 2rem;">
                <a href="/signup" class="link">Create New Account</a>
            </div>
        </div>
    </div>

    <!-- Form Clear Script for Back Navigation -->
    <script>
        window.addEventListener('pageshow', function(event) {
            if (event.persisted) {
                document.querySelectorAll('form').forEach(form => form.reset());
            }
        });
    </script>
</body>
</html>