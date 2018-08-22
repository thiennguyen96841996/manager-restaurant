<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Product;
use Carbon\Carbon;


class CommentController extends Controller
{
    public function store(Request $request)
    {
        $data['content'] = $request->get('content');
        $data['name'] = $request->get('name');
        $data['email'] = $request->get('email');
        $data['phone'] = $request->get('phone');
        $data['post_id'] = $request->get('post_id');
        $data['post_type'] = $request->get('post_type');
        $comment = Comment::create($data);
        return $comment;
    }

    public function fetch(Request $request)
    {
        $result = [];
        $comments = Comment::where(['post_id' => $request->get('post_id'), 'post_type' => $request->get('post_type')])
            ->orderBy('created_at', 'DESC')->get();
        foreach ($comments as $comment) {
            try {
                $tmp = [];
                $name = $comment['name'];
                $created_at = Carbon::parse($comment['created_at'])->format('H:m d M Y');
                $content = $comment['content'];
                $id = $comment['id'];
                array_push($tmp, $name, $created_at, $content, $id);
                array_push($result, $tmp);
            } catch (ModelNotFoundException $e) {
                return $e->getMessage();
            }
        }
        return json_encode($result);
    }
}
