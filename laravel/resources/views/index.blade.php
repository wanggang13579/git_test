@extends('msg')



@section('content')

		<p>

		<a href="/laravel/public/add">添加新留言</a>
			<br />
		</p>
			<div>
				<table border="1"  cellpadding="0"  cellspacing="20">
					<tr>
						<th>id</th>
						<th>标题</th>
						<th>发表者</th>
						<th>发表时间</th>
						<th>可执行操作</th>
					</tr>
				
				@foreach ($msgs as $msg)
					{{-- expr --}}
					<tr>
						<td>{{$msg->id}}</td>
						<td>{{$msg->title}}</td>
						<td>{{$msg->author}}</td>
						<td>{{$msg->updated_at}}</td>
						<td>
							<a href="/laravel/public/view/{{$msg->id}}">查看</a> |
							<a href="/laravel/public/delete/{{$msg->id}}">删除</a> |
							<a href="/laravel/public/edit/{{$msg->id}}">编辑</a>
						</td>
					</tr>





				@endforeach
				</table>
			</div>

@endsection