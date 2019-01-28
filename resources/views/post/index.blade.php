<h1>Hello world!</h1>
<a href="{{ url("post/add") }}">Add new post</a>


<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Content</th>
        </tr>
    </thead>
    <tbody>
        @foreach($all_product as $k=>$v)
            <tr>
                <td>{{ $v->id }}</td>
                <td>{{ $v->title }}</td>
                <td>{{ $v->description }}</td>
                <td>{{ $v->content }}</td>
            </tr>
        @endforeach
    </tbody>
</table>