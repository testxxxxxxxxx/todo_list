<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class page extends Controller
{
    protected $content_0,$user_0,$id,$user_id,$id_0;

    public function index(Request $request)
    {
        $value=session('key','defalut');

        return $value;

    }
    public function show_task(Request $request)
    {
        $tasks=DB::table('task')->where('user_id',Auth::id())->get();

        $req_0=false;

        return view('show_task',compact('tasks'),compact('req_0'));

    }


    public function insert_task(Request $request)
    {
        if($request->input('content_0')===null) return redirect('/home/functions/show_task');
        else
        {
            $this->content_0=$request->input('content_0');
            $this->user_0=Auth::id();

            $tasks=DB::table('task')->insert(['id'=>NULL,'content_0'=>$this->content_0,'user_id'=>$this->user_0]);

            return redirect('/home/functions/show_task');

        }

    }
    public function update_task(Request $request)
    {
        if($request->input('content_0')===null) return redirect('/home/functions/show_task');
        else
        {

            $this->content_0=$request->input('content_0');
            $this->user_0=$request->input('id');
            $this->user_id=Auth::id();

            $tasks=DB::table('task')->where(['id'=>$this->user_0,'user_id'=>$this->user_id])->update(['content_0'=>$this->content_0]);

            return redirect('/home/functions/show_task');

        }

    }
    public function update_task_0(Request $request)
    {
        $id_0=$request->get("id");

        $tasks=DB::table('task')->where('user_id',Auth::id())->get();

        $req_0=true;

        return view('show_task',compact('tasks','req_0','id_0'));

    }
    public function delete_task(Request $request)
    {
        $this->user_0=$request->input('id');
        $this->user_id=Auth::id();

        $tasks=DB::table('task')->where(['id'=>$this->user_0,'user_id'=>$this->user_id])->delete();

        return redirect('/home/functions/show_task');

    }

}