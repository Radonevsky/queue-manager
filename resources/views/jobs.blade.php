<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Queue Manager</title>
</head>
<body>
<div class="table-container">
    <h2>Tasks in Queue</h2>
    <table class="styled-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Payload</th>
            <th>Available At</th>
            <th>Created At</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($jobs as $job)
            <tr>
                <td>{{ $job->id }}</td>
                <td class="payload-column">{{ $job->payload }}</td>
                <td>{{ date('Y-m-d H:i:s', $job->available_at) }}</td>
                <td>{{ date('Y-m-d H:i:s', $job->created_at) }}</td>
                <td>{{ $job->status }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<style>
    .styled-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    .styled-table th,
    .styled-table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    .styled-table th {
        background-color: #f2f2f2;
    }
    .styled-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .styled-table tbody tr:hover {
        background-color: #eaeaea;
    }
    .table-container {
        width: 1000px;
        margin: 0 auto;
    }
    .payload-column {
        max-width: 200px;
        word-wrap: break-word;
    }
</style>
</body>
</html>
