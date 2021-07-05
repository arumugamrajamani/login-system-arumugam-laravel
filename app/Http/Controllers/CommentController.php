<?php
namespace App\Http\Controllers;
// namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function show(){
        $comment = Comment::all();
        return view('/admin', ['comments'=>$comment]);
    }

    public function store(Request $request)
    {
        //$this->validator($request->all())->validate();

        $data = new Comment;
        $data->user_id = $request->user_id;
        $data->user_role =  $request->user_role;
        $data->user_name = $request->user_name;
        $data->comment = $request->comments;
        $data->save();

   
        return redirect('/admin');
    
    }


}
