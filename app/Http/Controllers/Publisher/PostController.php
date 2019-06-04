<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SiteFunction;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Publisher;
use App\Models\SubscriptionType;
use App\Models\PublisherReport;
use App\Models\ReportType;
use App\Models\PostType;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = $request->segments()[1];
        $postType = app()->call('App\Http\Controllers\SiteFunction@checkPostType', [$type]);
        $publisher_id = auth()->user()->person->publisher->id;
        $posts = Post::where('publisher_id', $publisher_id)->where('post_type_id', $postType)->where('deleted', 0)->orderby('id', 'desc')->get();
        return view('publisher.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publisher = auth()->user()->person;
        $publisher_id = auth()->user()->person->publisher->id;
        $reportTypes = ReportType::with(['publisherReport' => function($q) use($publisher_id) {
            $q->where('publisher_id', $publisher_id);
        }])
        ->get();

        $subscriptionTypes = SubscriptionType::orderby('id')->get();
        return view('publisher.post.new', compact('subscriptionTypes', 'reportTypes', 'publisher'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = $request->image->getClientOriginalName();
        
        if($request->hasFile('image') && $request->file('image')->isValid() ){
            $date = date('Y-m-d-H-i');
            $name = kebab_case($date).'-'.$request->image->hashName();
            $extension = $request->image->extension();
            $nameFile  = "{$name}.{$extension}";

            $data['image'] = $nameFile;
            $upload = $request->image->storeAs('img/posts', $nameFile);

            if(!$upload)
                return redirect()->back()->with('error', 'Falha ao enviar a imagem');
        }
        
        $post = new Post;
        $message = $post->newPost($data);
        return redirect()->back()->with($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publisher = auth()->user()->person;
        $post = Post::where('id', $id)->get()->first();
        $reportType = ReportType::where('id', $post->report_type_id)->get()->first();
        $subscriptionType = SubscriptionType::where('id', $post->subscription_type_id)->orderby('id')->get()->first();
        return view('publisher.post.show', compact('post', 'subscriptionType', 'publisher', 'reportType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publisher = auth()->user()->person;
        $publisher_id = $publisher->publisher->id;
        $reportTypes = ReportType::with(['publisherReport' => function($q) use($publisher_id) {
            $q->where('publisher_id', $publisher_id);
        }])
        ->get();

        $post = Post::where('id', $id)->get()->first();
        $subscriptionTypes = SubscriptionType::orderby('id')->get();

        return view('publisher.post.edit', compact('post', 'subscriptionTypes', 'publisher', 'reportTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid() ){
            $date = date('Y-m-d-H-i');
            $name = kebab_case($date).'-'.$request->image->hashName();
            $extension = $request->image->extension();
            $nameFile  = "{$name}.{$extension}";

            $data['image'] = $nameFile;
            $upload = $request->image->storeAs('img/posts', $nameFile);

            if(!$upload)
                return redirect()->back()->with('error', 'Falha ao enviar a imagem');
        }
        $post = Post::where('id', $data['id'])->get()->first();
        $message = $post->updatePost($data);
        return redirect()->back()->with($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
