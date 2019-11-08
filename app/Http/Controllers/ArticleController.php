<?php


namespace App\Http\Controllers;


use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\ImageArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id','DESC')->paginate(9);
        return view('article/index',compact('articles'));  //compact створює масив даних з таблиці
    }
    public function add()
    {
        return view('article/add');
    }
    public function addSubmit(ArticleRequest $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');

        $article = new Article();
        $article->title = $title;
        $article->description = $description;
        $article->user_id = Auth::user()->id;
        $article->save();

        if($request->isMethod('post')) {
            if($request->hasFile('images')) {
                $files = $request->file('images');
                foreach ($files as $file) {
                    $name = $file->getClientOriginalName();
                    $path = 'public/article/' . $article->id;
                    if(!Storage::exists($path)) {
                        Storage::makeDirectory($path);
                    }
                    $file->move(storage_path("app/$path"), $name);
                    $articleImage = new ImageArticle();
                    $articleImage->article_id = $article->id;
                    $articleImage->name = $name;
                    $articleImage->save();
                }
            }
        }


        session()->flash('success','article #'.$article->id.' success added');
        return redirect()->route('article');
    }

    public function edit(Article $article)
    {
        return view('article/edit',compact('article'));
    }
    public function editSubmit(Request $request, Article $article)
    {
        $title = $request->input('title');
        $description = $request->input('description');

        $article->title = $title;
        $article->description = $description;
        $article->save();

        session()->flash('warning','article #'.$article->id.' edited');
        return redirect()->route('article');
    }

    public function delete(Article $article)
    {
        $article->delete();
        session()->flash('danger','article #'.$article->id.' removed');
        return redirect()->route('article');
    }
}
