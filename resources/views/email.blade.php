
@if($token !== null)
<p>This is a test mail<br> token: <a href="{{url('/verify/'.$token)}}">Click Here</a> </p>
@else
<P>There is a new post Title:->{{$post}}</P>
@endif