<?php


namespace App\Http\Controllers;


use App\Http\Requests\OfferRequest;
use App\Models\ImageOffer;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

//use Illuminate\Support\Facades\Cache;

class OfferController extends Controller
{
    public function index() {
        $offers = Offer::orderBy('id','DESC')->paginate(9);
        return view('offers/index',compact('offers'));  //compact створює масив даних з таблиці
    }

    public function add() {
        return view('offers/add');
    }
    public function addSubmit(OfferRequest $request)
    {
//        dd($request->file('images'));
        $title = $request->input('title');
        $price = $request->input('price');
        $description = $request->input('description');

        $offer = new Offer();
        $offer->title = $title;
        $offer->price = $price;
        $offer->description = $description;
        $offer->user_id = Auth::user()->id;
        $offer->save();

        if($request->isMethod('post')) {
            if($request->hasFile('images')) {
                $files = $request->file('images');
                foreach ($files as $file) {
                    $name = $file->getClientOriginalName();
                    $path = 'public/offers/' . $offer->id;
                    if(!Storage::exists($path)) {
                        Storage::makeDirectory($path);
                    }
                    $file->move(storage_path("app/$path"), $name);
                    $offerImage = new ImageOffer();
                    $offerImage->offer_id = $offer->id;
                    $offerImage->name = $name;
                    $offerImage->save();
                }
            }
        }

 //       Cache::put('success', 'offer #'.$offer->id.' success added', 1);
        session()->flash('success','offer #'.$offer->id.' success added');
        return redirect()->route('offers');


//        dd($request->all()); //для перевірки
    }
    public function edit(Offer $offer)
    {
        return view('offers/edit',compact('offer'));
    }

    public function editSubmit(Request $request, Offer $offer)
    {
        $title = $request->input('title');
        $price = $request->input('price');
        $description = $request->input('description');

        $offer->title = $title;
        $offer->price = $price;
        $offer->description = $description;
        $offer->save();

        if($request->isMethod('post')) {
            if ($request->hasFile('images')) {
                $files = $request->file('images');
                foreach ($files as $file) {
                    $name = $file->getClientOriginalName();
                    $path = 'public/offers/' . $offer->id;
                    if (!Storage::exists($path)) {
                        Storage::makeDirectory($path);
                    }
                    $file->move(storage_path("app/$path"), $name);
                    $offerImage = new ImageOffer();
                    $offerImage->offer_id = $offer->id;
                    $offerImage->name = $name;
                    $offerImage->save();
                }
            }
        }

        session()->flash('warning','offer #'.$offer->id.' edited');
        return redirect()->route('offers');
    }

    public function delete(Offer $offer)
    {
        $directoryPath = 'public/offers/'.$offer->id;
        $offer->delete();
        if(Storage::exists($directoryPath)) {
            Storage::deleteDirectory($directoryPath);
        }
        session()->flash('danger','offer #'.$offer->id.' removed');
        return redirect()->route('offers');
    }

    public function view(Offer $offer)
    {
        return view('offers/view',compact('offer'));
    }

    public function deleteImage(Offer $offer, ImageOffer $imageOffer)
    {
        $pathDir = '/app/public/offers/'.$offer->id.'/';
        $ingName = $imageOffer->name;

        $imageOffer->delete();  //видадення фото з бази

        if (is_file(storage_path($pathDir . $ingName))) {
            unlink(storage_path($pathDir . $ingName));
        }
        return redirect()->route('offers-edit',$offer->id);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $offers = Offer::where('title','like',"%$search%")->get();
        return view('offers/search',compact('offers'));
    }
}
