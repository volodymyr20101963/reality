<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Offer;
use App\Models\ImageOffer;
use App\User;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','DESC')->paginate(9);
        return view('admin/users/index',compact('users'));
    }

//    public function delete(User $user,Offer $offer,Article $article)

    public function delete(User $user)
    {
//        $user->offers - виклик з моделі /var/www/reality/app/User.php методу offers (без дужок () !!!);
//        використовується hasMany (на нижче підкреслений хвилею offers не звертати уваги)
        foreach ($user->offers as $offer) {
            $pathDirImg = 'public/offers/'.$offer->id;  //папка з зображеннями користувача
            if (Storage::exists($pathDirImg)) {
                Storage::deleteDirectory($pathDirImg);
            }
        }
        foreach ($user->articles as $article) {
            $pathDirImg = 'public/article/'.$article->id;
            if (Storage::exists($pathDirImg)) {
                Storage::deleteDirectory($pathDirImg);
            }
        }
        $user->delete();

        session()->flash('danger', 'user #'.$user->id.' removed');
        return redirect()->route('admin-users');
    }
}
