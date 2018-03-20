<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Location;
use App\Vehicle;
use App\Customer;



class CustomerController extends Controller
{
  public function searchcar(Request $request){
    $from = $request->input('from');
    $to = $request->input('to');

    $searched = DB::table('vehicles')
        ->join('locations', 'vehicles.user_id', '=', 'locations.userid')
        ->select('vehicles.*','locations.*')
        ->where('locations.from','=',$from)->where('locations.to','=',$to)->where('vehicles.book','!=',1)
        ->orderBy('locations.cost', 'asc')->get();
    return view('customer.searchedcar')->with(['searched'=> $searched, 'from' => $from, 'to' => $to]);
  }

  public function searchcardesc(Request $request){
    $from = $request->input('from');
    $to = $request->input('to');

    $searched = DB::table('vehicles')
        ->join('locations', 'vehicles.user_id', '=', 'locations.userid')
        ->select('vehicles.*','locations.*')
        ->where('locations.from','=',$from)->where('locations.to','=',$to)->where('vehicles.book','!=',1)
        ->orderBy('locations.cost', 'desc')->get();
    return view('customer.searchedcarasc')->with(['searched'=> $searched, 'from' => $from, 'to' => $to]);
  }

  public function customersignin(Request $request, $carnumber,$from,$to)
  {
    if (!Auth::guard('customers')->attempt($request->only(['email', 'password']) )) {
      return redirect()->back()->with('error', 'Credentials do not match');
    }


    return redirect('makeorder'.'/'.$carnumber.'/'.$from.'/'.$to)->with(['success'=> 'Welcome back!!']);

  }
  public function getsignup($carnumber,$from,$to){
    return view('customer.signup')->with(['carnumber'=> $carnumber, 'from'=>$from, 'to'=>$to]);
  }

  public function postsignup(Request $request, $carnumber,$from,$to){
    $this->validate($request, [
      'email'=> 'required|unique:customers|email',
      'name' => 'required',
      'password' => 'required|min:5',
    ]);

    $customers = new Customer;

    $customers->email = $request->input('email');
    $customers->name = $request->input('name');
    $customers->password = bcrypt($request->input('password'));

    $customers->save();
    return redirect('/order'.'/'.$carnumber.'/'.$from.'/'.$to);
  }

  public function logout(){
    Auth::guard('customers')->logout();
    return redirect('/');
  }

}
