<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tourism;
use App\homestay;
use App\business_detail;
use App\menu;
use App\city;
use Auth;
use Storage;

class BusinessController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showBusiness($id){
        $menu = menu::find($id);
        if($id == 1){
          $business_detail = tourism::all();
          return view('business/business_detail',['bus_list_page'=>$business_detail,'menu'=> $menu, 'id_usaha'=>$id ]);
          //id_usha->$usaha = mengambil primary key dari table constraint
        }elseif ($id == 2) {
          $business_detail = homestay::all();
          return view('business/business_detail',['bus_list_page'=>$business_detail,'menu'=> $menu, 'id_usaha'=>$id ]);
        }
    }
    public function addBusiness($id){
      $menu = menu::find($id);
        $business_detail = business_detail::all();
        $city_list = city::all();
        return view('business/add_business_detail',['business_details'=>$business_detail, 'menu'=> $menu, 'city'=>$city_list]);
    }

    public function insertBusiness(Request $data, $id){
      if($data->bus_pict){
        $path = $data->bus_pict->store('bus_avatar','public');
      }else {
        $path = '';
      }
      if(isset($data['condition'])){
        $condition = $data['condition'];
      }else{
        $condition = 1;
      }
      $business_detail = business_detail::create([
          'business_name' => $data['name'],
          'business_email' => $data['email'],
          'business_address' => $data['address'],
          'business_lat' => $data['lat'],
          'business_lang' => $data['lang'],
          'business_phone' => $data['phone'],
          'business_open_time' => $data['open'],
          'business_close_time' => $data['close'],
          'business_price' => $data['price'],
          'business_desc' => $data['desc'],
          'business_profile_pict' => $path,
          'condition'=> $condition
      ]);
          if($id == 1 ){
            tourism::create([
              'id_menu' => $id,
              'id_user' => Auth::user()->id_user,
              'id_city' => $data['city'],
              'id_business_details' => $business_detail->id_business_details,
              'condition'=> $condition
            ]);
          }elseif($id == 2){
            homestay::create([
              'id_menu' => $id,
              'id_user' => Auth::user()->id_user,
              'id_city' => $data['city'],
              'id_business_details' => $business_detail->id_business_details
            ]);
            business_detail::where('id_business_details',$business_detail->id)->update(['condition'=>$condition]);
            // $business_detail->business_status = $data['status'];
            $business_detail->save();
          }
        return redirect()->route ('businessDetail',['id'=>$id]);
    }

    public function edit($id)
    {
      $menu = menu::find($id);
      $business_details = business_detail::find($id);
      return view('business/edit_business',['business_details'=>$business_details, 'menu'=>$menu]);
    }

    public function update(Request $request)
    {

    }

    public function delete(Request $request)
    {
      if($request->id_usaha == 1 ){
        $tourism = tourism::where('id_business_details',$request->id_business_detail)->delete();
        $business_detail = business_detail::where('id_business_details',$request->id_business_detail)->delete();
        // $tourism->delete();

      }elseif($request->id_usaha == 2){
        $homestay = homestay::where('id_business_details',$request->id_business_detail)->delete();
        $business_detail = business_detail::where('id_business_details',$request->id_business_detail)->delete();
        //$homestay->delete();
      }
      // return "KEMPET WOE";
      return redirect('businessDetail/'.$request->id_usaha);
    }
}
