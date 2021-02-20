<?php

namespace App\Http\Controllers;

use App\Http\Requests\Store;
use App\Http\Requests\StoreValid;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
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
     */
    public function store(StoreValid $request)
    {

        //Add
        $data = $request->all();

        if ($request->image && $request->image->isValid()) {
            $name = Str::of($request->titulo)->slug('-') . '.' . $request->image->getClientOriginalExtension();
            $image = $request->image->storeAs('posts', $name);
            $data['image'] = $image;
        }

        Post::create($data);
        return redirect("/posts")->with('message', 'O post foi adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)

    {

        if (!$post = Post::find($id)) {

            return redirect() - back();
        }

        return view('dashboard.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if (!$post = Post::find($id)) {
            return redirect()->back();
        }
        return view("dashboard.post.edit", compact('post'));
    }

    /**
     * Update the specified resource in storage.*/
    public function update(StoreValid $request, $id)
    {

        //Update
        if (!$post = Post::find($id)) {
            return redirect()->back();
        }

        $data = $request->all();

        if ($request->image->isValid()) {

            if (Storage::exists($post->image)) {
                Storage::delete($post->image);
                $name = Str::of($request->titulo)->slug('-') . '.' . $request->image->getClientOriginalExtension();
                $image = $request->image->storeAs('posts', $name);
                $data['image'] = $image;
            }
        }
        $post->update($data);
        return redirect("/posts")->with('message', 'O post foi editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleted($id)
    {

        // dd

        if (!$post = Post::find($id)) return redirect()->back();
        if (Storage::exists($post->image)) Storage::delete($post->image);

        $post->delete();
        return redirect('/posts')->with('messageDelete', 'O post foi deletado com sucesso');;
    }

    //account
    public function account()
    {

        $user = Auth::user();
        return view('dashboard.post.account', compact('user'));
    }
}
