<!DOCTYPE html>
<html>

<head>

    <title>Tracking Result</title>

    <style>

        body{

            margin:0;
            font-family:Arial, sans-serif;
            background:#f4f4f4;
            padding:40px;

        }

        h1{

            text-align:center;
            margin-bottom:30px;
            color:#333;

        }

        table{

            width:90%;
            margin:auto;
            border-collapse:collapse;
            background:white;
            box-shadow:0px 0px 15px rgba(0,0,0,0.2);

        }

        th{

            background:#007bff;
            color:white;
            padding:15px;
            font-size:18px;

        }

        td{

            padding:15px;
            text-align:center;
            border-bottom:1px solid #ddd;

        }

        tr:hover{

            background:#f1f1f1;

        }

    </style>

</head>

<body>

    <h1>Complaint Tracking Result</h1>

    <table>

        <tr>

            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>PIN</th>
            <th>Complaint</th>
            <th>Status</th>

        </tr>

        @foreach($data as $row)

        <tr>

            <td>{{ $row->name }}</td>

            <td>{{ $row->phone }}</td>

            <td>{{ $row->email }}</td>

            <td>{{ $row->pin }}</td>

            <td>{{ $row->complaint }}</td>

            <td>{{ $row->status }}</td>

        </tr>

        @endforeach

    </table>

</body>

</html>