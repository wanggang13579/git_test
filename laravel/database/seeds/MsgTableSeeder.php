<?php 

use Illuminate\Database\Seeder;

use App\Msg;

class MsgTableSeeder extends Seeder{

	public function run(){
		//清空原始数据
		// Msg::delect();
		// DB::table('msgs')->delect();
		//创建新数据
		Msg::create
		// DB::table('msgs')->insert
			([

				'title'  =>  'title 1',
				'author' =>  'test 1',
				'body'   =>  '1111111111',


			]);

	}
}