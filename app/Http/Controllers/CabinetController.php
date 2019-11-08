<?php


namespace App\Http\Controllers;


use App\Models\Offer;
use Illuminate\Support\Facades\Auth;

class CabinetController extends Controller
{
    public function index() {
        $user = Auth::user();
        $offers = Offer::where('user_id',$user->id)->orderBy('id','DESC')->get();
        return view('cabinet/index',compact('user','offers'));
    }
}
