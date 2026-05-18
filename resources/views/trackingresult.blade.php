<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking Result - Rescue Management System</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="navbar">
        <a href="/dashboard">Home</a>
        <a href="/tracking">Tracking</a>
        <a href="/au">About Us</a>
    </div>

    <div class="center-content" style="align-items: flex-start; padding-top: 4rem;">
        <div class="glass-panel wide">
            <h1>Complaint Tracking Result</h1>
            <p>Below are the details corresponding to the provided name.</p>
            
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>PIN</th>
                            <th>Complaint</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->pin }}</td>
                            <td>{{ $row->complaint }}</td>
                            <td>
                                @if($row->status == 'Unresolved')
                                    <span style="color: #ef4444; font-weight: 600;">{{ $row->status }}</span>
                                @else
                                    <span style="color: #22c55e; font-weight: 600;">{{ $row->status }}</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div style="margin-top: 2rem;">
                <a href="/tracking" class="btn-secondary">Track Another</a>
            </div>
        </div>
    </div>
</body>
</html>