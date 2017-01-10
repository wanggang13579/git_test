@extends('msg');



@section('content')

	<h3>{{ $msg->title }}</h3>

	<h4>
		时间：{{ $msg->updated_at}}

		
		&nbsp;&nbsp;


		作者：{{ $msg->author}}

	</h4>

	<p>
		
		内容：<br />
		{{ $msg->body}}

	</p>



@stop