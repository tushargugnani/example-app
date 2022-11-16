@foreach($posts as $post)
  @foreach($post->comments as $comment)
    {{$comment->body}}<br/>
  @endforeach
@endforeach