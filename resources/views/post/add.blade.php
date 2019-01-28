<h1>Add new post</h1>
{{ Form::open(array('url' => 'post/add','method'=>'post')) }}
    {{ Form::label('email', 'E-Mail Address')}}
    {{ Form::text('email', 'example@gmail.com') }}
    {{ Form::submit('Click Me!') }}

    <br/>
    {{ Form::label('category','Category') }}
    {{ Form::select('category',$all_category,'2') }}

{{ Form::close() }}