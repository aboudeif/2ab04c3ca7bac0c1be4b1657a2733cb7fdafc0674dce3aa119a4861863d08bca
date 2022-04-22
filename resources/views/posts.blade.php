<head>
    <link rel="stylesheet" href="css">
</head>
<body>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>posted by</th>
            <th>posted at</th>
            <th>actions</th>
        </tr>
    </thead>

@foreach ($allPosts as $post)
    <tbody>
        <tr>
            <th>{{ $post['id'] }}</th>
            <th>{{ $post['title'] }}</th>
            <th>{{ $post['posted_by'] }}</th>
            <th>{{ $post['posted_at'] }}</th>
            <th>
                <button>Edit</button>
                <button>Publish</button>
                <button>Delete</button>
            </th>
        </tr>
    </tbody>
@endforeach 

</table>
</body>