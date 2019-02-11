<h1>Add new post</h1>
{{ Form::open(['url' => 'post/add','method'=>'post']) }}
    {{ Form::label('title', '')}}
    {{ Form::text('title', '') }}
    <br/>
    {{ Form::label('description', '')}}
    {{ Form::text('description', '') }}
    <br/>
    {{ Form::label('content', '')}}
    {{ Form::text('content', '') }}
    <br/>
    {{ Form::label('category_id','category_id') }}
    {{ Form::select('category_id',$all_category) }}
    <br/>
    {{ Form::submit('Click Me!') }}
{{ Form::close() }}