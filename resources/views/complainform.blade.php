<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Form - Rescue Management System</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="navbar">
        <a href="/dashboard">Home</a>
        <a href="/tracking">Tracking</a>
        <a href="/au">About Us</a>
    </div>

    <div class="center-content">
        <div class="glass-panel wide">
            <h1>REGISTER COMPLAINT</h1>
            <p>Please provide detailed information about the emergency incident.</p>
            
            <form action="/sc" method="POST" autocomplete="off">
                @csrf
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 1.5rem;">
                    <div class="form-group" style="margin-bottom:0;">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter Your Name" required pattern="[A-Za-z ]{3,30}" title="Name should contain only letters and spaces" autocomplete="off">
                    </div>
                    <div class="form-group" style="margin-bottom:0;">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" placeholder="Enter Phone Number" required pattern="[0-9]{10}" title="Phone number must contain exactly 10 digits" autocomplete="off">
                    </div>
                    <div class="form-group" style="margin-bottom:0;">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter Email" required title="Enter a valid email address" autocomplete="off">
                    </div>
                    <div class="form-group" style="margin-bottom:0;">
                        <label for="pin">PIN Code</label>
                        <input type="text" id="pin" name="pin" placeholder="Enter Area PIN Code" required pattern="[0-9]{6}" title="PIN code must contain exactly 6 digits" autocomplete="off">
                    </div>
                </div>

                <div class="form-group">
                    <label for="address">Full Address</label>
                    <textarea id="address" name="address" placeholder="Enter Full Address" required title="Enter complete address"></textarea>
                </div>
                <div class="form-group">
                    <label for="complaint">Complaint / Emergency Description</label>
                    <textarea id="complaint" name="complaint" placeholder="Describe Your Complaint/Emergency" required title="Enter your complaint"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" id="status" name="status" value="Unresolved" readonly class="readonly-status">
                </div>

                <button type="submit" class="btn-primary btn-block">Submit Complaint</button>
            </form>
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