<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Post;
use Illuminate\Support\Facades\Input;
class CityController extends Controller
{
    public function submitcity(Request $request){
        //    $validation=$req->validate([
        //        'subject'=>'required|min:5|max:50',
        //        'message'=>'required|min:15|max:500'
        //    ]);
        $city=new City();
        $city->name_city=$request->input('name_city');
        $city->opis_city=$request->input('opis_city');
        $city->img_city=$request->input('img_city');
        $this->validate($request, [
            'img_city' => 'required',
            'img_city.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048'
    ]);
    
    if($request->hasfile('img_city'))
    {
        foreach($request->file('img_city') as $image)
        {
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/', $name);  // your folder path
            $data[] = $name;  
        }
    }
    
    $city->img_city = json_encode($data);
        $city->save();
        return redirect()->route('city-add')->with('success','Город был добавлен');
       }

       public function search(Request $request){
        $q = Input::get ( 'q' );
        
            if ($q!=NULL) {
                $city = City::where ( 'name_city', 'LIKE', '%' . $q . '%')->get ();
                if (count ( $city ) > 0)
                    return view ( 'index' )->withDetails ( $city )->withQuery ( $q );
                else
                    return view ( 'index' )->withMessage ( 'Город не найден' );
            }else{
                return view ( 'index' )->withMessage ( 'Введите что нибудь' );}
            }

    // public function cityShow(){
    //     $city=new City();
    //     $result=$city->find($id_city);
       
    //     $tmp = json_decode($result->img_city, true);    // using a temp variable for testing
    //     $result->img_city=$tmp;
        
    //     return view('city-test',['data'=>$city->all()]);
    // }
    public function cityShow($id_city){
        $city=new City();
        // $result=$city->find($id_city);
       
        // $tmp = json_decode($result->img_city, true);    // using a temp variable for testing
        // $result->img_city=$tmp;
      $result=$city->find($id_city);
      // var_dump($result->filename);
      $tmp = json_decode($result->img_city, true);    // using a temp variable for testing
      // var_dump($tmp);
      $result->img_city=$tmp;
      // $result = $tmp;
      // $result['data'] = array_reverse($result['data']);
      // die();
      // var_dump($result);
      // die();
      return view('city-test',['data'=>$result]);
        // return view('city-test',['data'=>$city->find($id_city)]);
    }

    // public function index()
    // {
    //     $post = Post::select('*')
    //     ->leftJoin('city', 'post.id_city', '=', 'city.id_city')
    //     ->get();

    //     return view('city-test', ['post' => $post]);
    // }

    public function allcity(){
        $city=new City;
  
        return view('allcities',['data'=>$city->all()]);
     }

     public function OneCity($id_city){
        $city=new City;
        $result=$city->find($id_city);
        // var_dump($result->filename);
        $tmp = json_decode($result->img_city, true);    // using a temp variable for testing
        // var_dump($tmp);
        $result->img_city=$tmp;
        // $result = $tmp;
        // $result['data'] = array_reverse($result['data']);
        // die();
        // var_dump($result);
        // die();
        return view('one-city',['data'=>$result]);
     }

     public function updateCity($id_city){
        $city=new City;
        return view('update-city',['data'=>$city->find($id_city)]);
     }

     public function updateCitySubmit($id_city,Request $request){
       
        $city=City::find($id_city);
        $city->name_city=$request->input('name_city');
        $city->opis_city=$request->input('opis_city');
        $city->img_city=$request->input('img_city');
        $this->validate($request, [
            'img_city' => 'required',
            'img_city.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048'
    ]);
    
    if($request->hasfile('img_city'))
    {
        foreach($request->file('img_city') as $image)
        {
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/', $name);  // your folder path
            $data[] = $name;  
        }
    }
    
    $city->img_city = json_encode($data);
        return redirect()->route('city-data', $id_city)->with('success','Город  был обновлен');
       }

       public function deleteCity($id_city){
        City::find($id_city)->delete();
        return redirect()->route('city-data')->with('success','Город был удален');
    }
}
