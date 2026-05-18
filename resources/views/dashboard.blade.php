<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Rescue Management System</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="navbar">
        <a href="/dashboard">Home</a>
        <a href="/tracking">Tracking</a>
        <a href="/logout">Logout</a>
        <a href="/au">About Us</a>
    </div>

    <div class="center-content" style="flex-direction: column; max-width: 1000px; margin: 0 auto; width: 100%; align-items: stretch; padding: 2rem;">
        
        <!-- Welcome Header -->
        <div class="glass-panel" style="width: 100%; max-width: 100%; margin-bottom: 2rem; text-align: left; padding: 2rem;">
            <h1 style="margin-bottom: 0.5rem; font-size: 2.2rem;">Welcome to the Dashboard</h1>
            <p style="margin-bottom: 0; font-size: 1.1rem;">Central command for managing rescue operations, tracking emergencies, and accessing intelligent assistance.</p>
        </div>

        <!-- Quick Actions Grid -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; width: 100%; margin-bottom: 1.5rem;">
            
            <div class="glass-panel" style="padding: 1.5rem; text-align: center; max-width: 100%;">
                <h3 style="color: var(--text-light); margin-bottom: 0.5rem; font-style: normal; font-weight: 600;">Report Emergency</h3>
                <p style="font-size: 0.9rem; margin-bottom: 1rem;">Quickly log a new incident requiring immediate action.</p>
                <a href="/rc" class="btn-primary" style="padding: 0.6rem 1.2rem; width: auto; font-size: 0.9rem;">Register Complaint</a>
            </div>

            <div class="glass-panel" style="padding: 1.5rem; text-align: center; max-width: 100%;">
                <h3 style="color: var(--text-light); margin-bottom: 0.5rem; font-style: normal; font-weight: 600;">Track Operations</h3>
                <p style="font-size: 0.9rem; margin-bottom: 1rem;">Monitor the live status and updates of your active complaints.</p>
                <a href="/tracking" class="btn-secondary" style="padding: 0.6rem 1.2rem; width: auto; font-size: 0.9rem;">View Tracking</a>
            </div>

        </div>

        <!-- Lower Section: Chatbot & Chart -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; width: 100%;">
            
            <!-- Chatbot Section (Left) -->
            <div class="glass-panel" style="width: 100%; max-width: 100%; text-align: left; padding: 2rem;">
                <h2 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem; color: var(--text-light);">Disaster Help AI Chatbot</h2>
                <p style="margin-bottom: 1.5rem; font-size: 0.9rem;">Ask for precautions, rescue help, emergency numbers, and disaster guidance.</p>

                <div class="chat-container" style="max-height: 250px;">
                    @if(isset($message))
                        <div class="chat-msg msg-user">
                            <b>You:</b>
                            {{ $message }}
                        </div>
                    @endif
                    
                    @if(isset($answer))
                        <div class="chat-msg msg-bot">
                            <b>System:</b>
                            {{ $answer }}
                        </div>
                    @endif
                </div>

                <form action="/help" method="POST" autocomplete="off">
                    @csrf
                    <div class="chat-input-group">
                        <input type="text" name="message" placeholder="Type the help you need..." required autocomplete="off">
                        <button type="submit" class="btn-primary" style="margin-top:0; padding: 0 2rem;">Send</button>
                    </div>
                </form>
            </div>

            <!-- Chart Section (Right) -->
            <div class="glass-panel" style="width: 100%; max-width: 100%; text-align: left; padding: 2rem;">
                <h2 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem; color: var(--text-light);">Incidents (Past Year)</h2>
                <p style="margin-bottom: 1.5rem; font-size: 0.9rem;">Monthly breakdown of reported natural calamities.</p>
                <div style="position: relative; height: 280px; width: 100%;">
                    <canvas id="incidentsChart"></canvas>
                </div>
            </div>

        </div>

    </div>

    <div class="footer">
        <img src="{{ asset('flood.png') }}" alt="Flood">
        <img src="{{ asset('cyclone.png') }}" alt="Cyclone">
        <img src="{{ asset('fire.png') }}" alt="Fire">
        <img src="{{ asset('earthquake.png') }}" alt="Earthquake">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('incidentsChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [
                        {
                            label: 'Flood',
                            data: [12, 19, 3, 5, 2, 3, 20, 30, 15, 5, 2, 8],
                            backgroundColor: 'rgba(59, 130, 246, 0.7)',
                            borderColor: 'rgba(59, 130, 246, 1)',
                            borderWidth: 1,
                            borderRadius: 4
                        },
                        {
                            label: 'Fire',
                            data: [5, 2, 10, 15, 25, 30, 10, 5, 2, 8, 12, 5],
                            backgroundColor: 'rgba(249, 115, 22, 0.7)',
                            borderColor: 'rgba(249, 115, 22, 1)',
                            borderWidth: 1,
                            borderRadius: 4
                        },
                        {
                            label: 'Cyclone',
                            data: [2, 1, 5, 20, 15, 8, 4, 12, 18, 6, 2, 1],
                            backgroundColor: 'rgba(6, 182, 212, 0.7)',
                            borderColor: 'rgba(6, 182, 212, 1)',
                            borderWidth: 1,
                            borderRadius: 4
                        },
                        {
                            label: 'Earthquake',
                            data: [0, 1, 0, 2, 0, 0, 1, 0, 3, 1, 0, 0],
                            backgroundColor: 'rgba(217, 119, 6, 0.7)',
                            borderColor: 'rgba(217, 119, 6, 1)',
                            borderWidth: 1,
                            borderRadius: 4
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: { color: 'rgba(255, 255, 255, 0.1)' },
                            ticks: { color: '#cbd5e1' }
                        },
                        x: {
                            grid: { display: false },
                            ticks: { color: '#cbd5e1' }
                        }
                    },
                    plugins: {
                        legend: {
                            labels: { color: '#f8fafc', font: { family: 'Inter', size: 12 } }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>