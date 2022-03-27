<html>
<head>
    <title>Log Activity</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .w-5{
            width: 12px;
        }
        nav{
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 style="text-align: center; margin: revert; ">Log Activity your project</h1>
    <table class="table table-bordered table-striped">
        <thead>
        <tr class="table-primary">
            <th>id</th>
            <th>action</th>
            <th>user_id</th>
            <th>status</th>
            <th width="150px;">more</th>
        </tr>
        </thead>
        <tbody>
        @if(!empty($data) && $data->count())
            @foreach($data as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->action }}</td>
                    <td>{{ $value->user_id }}</td>
                    <td>{{ $value->status }}</td>
                    <td>
                        <button class="btn btn-primary">Show More</button>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="10">There are no data.</td>
            </tr>
        @endif
        </tbody>
    </table>

    {!! $data->links() !!}
</div>

</body>
</html>
