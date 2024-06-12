<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Post::where('post.status', '!=', 0)
            ->join('topic', 'topic.id', '=', 'post.topic_id')
            ->orderBy('post.created_at', 'desc')
            ->select('post.id', 'post.image', 'topic.id as topicid', 'topic.name as topicname', 'post.title', 'post.description', 'post.status', 'post.detail')
            ->get();

        return view('backend.post.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list = Post::where('post.status', '!=', 0)
            ->join('topic', 'topic.id', '=', 'post.topic_id')
            ->orderBy('post.created_at', 'desc')
            ->select('post.id', 'post.image', 'topic.id as topicid', 'topic.name as topicname', 'post.title', 'post.description', 'post.status', 'post.detail')
            ->get();
        $htmltopicid = '';
        foreach ($list as $item) {
            $htmltopicid .= "<option value='".$item->topicid."'>".$item->topicname.'</option>';
        }

        return view('backend.post.create', compact('list', 'htmltopicid'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $query = Post::where('status', 'active')->toSql();
        dd($query);
        $post = new Post();
        $post->topic_id = $request->topic_id;
        $post->title = $request->title;
        $post->slug = Str::of($request->title)->slug('-');
        $post->detail = $request->detail;
        // $post->image = $request->image;
        $post->type = $request->type;
        $post->description = $request->description;
        $post->created_at = now(); // Thay vì sử dụng date('Y-m-d H:i:s')
        $post->created_by = Auth::id() ?? 1;
        $post->status = $request->status;

        $post->save();

        return redirect()->route('admin.post.index');
    }

    // Các hàm còn lại không thay đổi

}
