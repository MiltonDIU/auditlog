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
        <tbody>

            <tr>
                <td>{!! $log->description !!}</td>
                <td>{!! $log->subject_id !!}</td>
                <td>{!! $log->subject_type !!}</td>
                <td>{!! $log->user_id !!}</td>
                <td>{{print_r($log->properties)}}</td>
                <td>{!! 'test' !!}</td>
                <td>{!! $log->host !!}</td>
                <td>{!! $log->created_at !!}</td>
            </tr>

        </tbody>
    </table>
</div>

</body>
</html>
