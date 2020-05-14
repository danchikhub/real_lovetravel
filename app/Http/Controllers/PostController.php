<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Post;
use Illuminate\Support\Facades\Input;
class PostController extends Controller
{
    public function create()
    {
        $city_name = City::select('*')->get();

        return view('post-add',['city_name' => $city_name]);
    }

    public function submitpost(Request $request){
        $post=new Post();
        $post->zag_post=$request->input('name_post');
        $post->opis_post=$request->input('opis_post');
        // $post->ejo=$request->input('opis_post');
        $post->ejo=$request['ejo'];
        $post->longitude=$request->input('longitude');
        $post->latitude=$request->input('latitude');
        $post->map_scale=$request->input('map_scale');
        $post->id_city=$request['id_city'];
        $post->img_post=$request->input('img_post');

        $this->validate($request, [
            'img_post' => 'required',
            'img_post.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048'
    ]);

    if($request->hasfile('img_post'))
    {
        foreach($request->file('img_post') as $image)
        {
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/', $name);  // your folder path
            $data[] = $name;
        }
    }

        $post->img_post = json_encode($data);
        $post->save();
        return redirect('/post-add')->with('success','Город был добавлен');

    }
    public function allData(){
        $post=new Post;

        return view('all-posts',['data'=>$post->all()]);
     }
    // public function index()
    // {
    //     $post = Post::select('*')
    //     ->leftJoin('city', 'post.id_city', '=', 'city.id_city')
    //     ->get();

    //     return view('city-test', ['post' => $post]);
    // }
    public function showOnePost($id_post){
        $post=new Post;
        $result=$post->find($id_post);
        // var_dump($result->filename);
        $tmp = json_decode($result->img_post, true);    // using a temp variable for testing
        // var_dump($tmp);
        $result->img_post=$tmp;
        // $result = $tmp;
        // $result['data'] = array_reverse($result['data']);
        // die();
        // var_dump($result);
        // die();
        return view('one-post',['data'=>$result]);
     }

     public function updatePost($id_post){
        $post=new Post;
        return view('update-post',['data'=>$post->find($id_post)]);
     }

     public function updatePostSubmit($id_post,Request $request){
        //    $validation=$req->validate([
        //        'subject'=>'required|min:5|max:50',
        //        'message'=>'required|min:15|max:500'
        //    ]);
        $post=Post::find($id_post);
        $post->zag_post=$request->input('name_post');
        $post->opis_post=$request->input('opis_post');
        // $post->ejo=$request->input('opis_post');
        $post->ejo=$request['ejo'];
        $post->id_city=$request['id_city'];
        $post->img_post=$request->input('img_post');
        $this->validate($request, [
            'img_post' => 'required',
            'img_post.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048'
    ]);

    if($request->hasfile('img_post'))
    {
        foreach($request->file('img_post') as $image)
        {
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/', $name);  // your folder path
            $data[] = $name;
        }
    }

        $post->img_post = json_encode($data);
        return redirect()->route('post-data-one', $id_post)->with('success','Пост был обновлен');
       }


       public function deletePost($id_post){
        Post::find($id_post)->delete();
        return redirect()->route('post-data')->with('success','Пост был удален');
}

       public function postPlacemark($id_post){
       $post=Post::find($id_post);

       $longitude = $post->longitude;
       $latitude = $post->latitude;
       $map_scale = $post->map_scale;
       $zag_post = $post->zag_post;
       // return view('placemark', $post);

        return view('placemark', ['longitude' => $longitude, 'latitude' => $latitude, 'map_scale' => $map_scale, 'zag_post' => $zag_post]);
    }
}
