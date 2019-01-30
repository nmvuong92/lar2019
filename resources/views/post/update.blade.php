<h1>update  post: {{ $post->id }}</h1>
{{ Form::open(array('url' => 'post','method'=>'put')) }}
    {{ Form::label('id', '')}}
    {{ Form::text('id', $post->id) }}
    <br/>
    {{ Form::label('title', '')}}
    {{ Form::text('title', $post->title) }}
    <br/>
    {{ Form::label('description', '')}}
    {{ Form::text('description', $post->description) }}
    <br/>
    {{ Form::label('content', '')}}
    {{ Form::text('content', $post->content) }}
    <br/>
    {{ Form::label('category_id','category_id') }}
    {{ Form::select('category_id',$all_category, $post->category_id) }}
    <br/>
    {{ Form::submit('save me!') }}
{{ Form::close() }}