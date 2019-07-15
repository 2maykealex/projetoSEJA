<?php

namespace App\Http\Controllers\Subscriber;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\SubscriptionType;
use App\Models\ReportType;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $person = auth()->user()->person;
        $subscription_type_id = $person->subscriptionRegistry->subscriptionPlan->subscription_type_id;
        $posts = Post::where('subscription_type_id', $subscription_type_id)->where('report_type_id',$id)->where('deleted', 0)->orderby('id', 'desc')->get();
        return view('subscriber.post.index', compact('posts'));
    }

    public function show($id)
    {
        $person = auth()->user()->person;
        $subscription_type_id = $person->subscriptionRegistry->subscriptionPlan->subscription_type_id;
        $post = Post::where('subscription_type_id', $subscription_type_id)->where('id', $id)->get()->first();
        if ($post){
            return view('subscriber.post.show', compact('post'));
        }
        return redirect()->back()->with(['error','A página que tentou acessar não está acessível!']);
    }
}
