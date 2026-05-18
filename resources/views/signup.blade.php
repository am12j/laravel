<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Rescue Management System</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="center-content">
        <div class="glass-panel">
            <h1>SIGNUP</h1>
            <p>Create your rescue management account</p>
            
            <form method="POST" action="/submit" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter Username" required pattern="[A-Za-z0-9]{3,20}" title="Username should contain 3 to 20 letters or numbers" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email" required title="Enter a valid email address" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password" required pattern=".{6,}" title="Password must contain at least 6 characters" autocomplete="new-password">
                </div>
                
                <button type="submit" class="btn-primary btn-block">Signup</button>
            </form>
            
            <div style="margin-top: 1.5rem;">
                <a href="/login" class="link">Already have an account? Login</a>
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