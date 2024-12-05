<!DOCTYPE html>
<html>
<head>
    <title>Vishal Rana Test</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
      
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">Vishal Rana Test</h3>
        <div class="card-body">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Post Count</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($userPostData as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>User - {{ $user->username }}</td>
                            <td>{{ $user->posts_count }} posts</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">There are no users.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
          
            {!! $userPostData->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</div>

</body> 
</html>
