@extends('msg');

@section('content')
	
	<div>
		
		<form action="/laravel/public/edit/{{$msg->id}}" method="post">
			
			{{-- //表单隐藏域....很有用，不能省掉 --}}
		<input type="hidden" name="_token" value="{{ csrf_token() }}"  />


			<p>
				标题：<input type="text" name="title" value="{{$msg->title}}" />

			</p>

			<p>
				作者：<input type="text" name="author" value="{{$msg->author}}" />

			</p>

			<p>
				内容：
				<br />
				<textarea name="body" id="" cols="30" rows="10">  {{$msg->body}}  </textarea>
			</p>

			<p>
				<input type="submit" value="提交" />

			</p>
		</form>




	</div>



@stop