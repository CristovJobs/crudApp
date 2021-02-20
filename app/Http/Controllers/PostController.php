<?php

namespace App\Http\Controllers;

use App\Http\Requests\Store;
use App\Http\Requests\StoreValid;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.post.index", ["posts" => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.post.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(StoreValid $request)
    {

        $data = $request->all();

        if ($request->image && $request->image->isValid()) {

            $name = Str::of($request->titulo)->slug('-').'.'.$request->image->getClientOriginalExtension();

            $image = $request->image->storeAs('posts',$name);
            $data['image'] = $image;
        }

        Post::create($data);
        return redirect("/posts")->with('message', 'O post foi adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {

        if (!$post = Post::find($id)) {

            return redirect()-back();
        }

        return view('dashboard.post.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where("id", $id)->first();
        return view("dashboard.post.edit", ["post" => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $post = Post::where("id", $id)->first();
        $post->titulo = $request->get("title");
        $post->conteudo = $request->get("content");
        $post->tags = $request->get("tags");
        $post->save();
        return redirect("/posts");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function deleted($id)
    {

        // dd("deleted o post --- {$id}");

        if (!$post = Post::find($id)) return redirect()->back();

        $post->delete();
        return redirect('/posts')->with('messageDelete', 'O post foi deletado com sucesso');;
    }

       //Profile
       public function account(){

        $user = Auth::user();
        return view('dashboard.post.account',compact('user'));

    }
}
