<!DOCTYPE html>
<html lang="en">
<head>
    <title>Audit Logs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Audit Logs</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Description</th>
            <th>Subject</th>
            <th>Subject Type</th>
            <th>SUser Id</th>
            <th>New Data</th>
            <th>Old Data</th>
            <th>Host</th>
            <th>Create Time</th>
            <th>View</th>
        </tr>
        </thead>
        <tbody>
        @foreach($logs as $log)
        <tr>
            <td>{!! $log->description !!}</td>
            <td>{!! $log->subject_id !!}</td>
            <td>{!! $log->subject_type !!}</td>
            <td>{!! $log->user_id !!}</td>
            <td>{!! 'test' !!}</td>
            <td>{!! 'test' !!}</td>
            <td>{!! $log->host !!}</td>
            <td>{!! $log->created_at !!}</td>
            <td><a href="{{route('audit-logs.show',$log->id)}}">View</a> </td>
        </tr>
            @endforeach
        </tbody>
    </table>
    {{ $logs->links() }}
</div>
</body>

</html>


