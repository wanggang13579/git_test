<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use App\Msg;

class MsgController extends Controller
{
	


public function index() {
        //获取
        $msgs = Msg::all();
        // var_dump($msgs);

        //显示视图，附加参数信息


    	return view('index')->with('msgs',$msgs);
    }

public function view($id){
    //获取当前id所指明的信息

    //显示视图
    // return "ssssssssssss";
    return view('view')->withMsg(Msg::find($id));
}


public function add(){
    //添加留言
   $msg = new Msg();
    // $data = array();
    $msg->title= Request::input('title');
    $msg->author= Request::input('author');
    $msg->body= Request::input('body');



    //插入数据

    
    $msg->save();


    //重定向
    return redirect('/');
   // return redirect()->route("index");

}

public function delete($id){
    //删除数据
    Msg::destroy($id);


       //重定向
    return redirect('/');   
}


public function edit($id) {
    //获取主键id目录
    //和查询留言很类似
    return view('edit')->withMsg(Msg::find($id));



    // return redirect('/');
}
public function postEdit($id){
    $msg = Msg::find($id);
    // $data = array();
    $msg->title = Request::input('title');
    $msg->author = Request::input('author');
    $msg->body = Request::input('body');



    //插入数据

    
    $msg->save();


    //重定向
    return redirect('/');
}

   /* public function index() {
    	return "MsgController/index";
    }



     public function show($id = 1) {
    	return "MsgController/show".$id;
    }


    public function create() {
    	return "MsgController/create";
    }



      public function edit($id) {
    	return "MsgController/edit/" . $id;
    }*/
}
