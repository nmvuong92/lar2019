<h1>Hello world!</h1>
<a href="{{ url("post/add") }}">Add new post</a>


<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Content</th>
            <th>Category id</th>
            <th>Command</th>
        </tr>
    </thead>
    <tbody>
        @foreach($all_product as $k=>$row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->title }}</td>
                <td>{{ $row->description }}</td>
                <td>{{ $row->content }}</td>
                <td>{{ $row->category_id }}</td>
                <td>
                    <a href="{{ url('post/update/'.$row->id) }}">Edit</a> | 
                    {{ Form::open(['url'=>'post/'.$row->id, 'method' => 'delete', 'onsubmit'=>'return confirm("Are you sure?");']) }}
                        <button type="submit">Delete</button>
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>