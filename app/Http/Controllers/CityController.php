<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;
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
        $city = City::where ( 'name_city', 'LIKE', '%' . $q . '%' )->get ();
        if (count ( $city ) > 0)
            return view ( 'index' )->withDetails ( $city )->withQuery ( $q );
        else
            return view ( 'index' )->withMessage ( 'Город не найден' );
       }
}
