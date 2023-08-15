<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function show()
    {
        $article = DB::table('article')->orderby('id','desc')->get();
        return view ('show', ['article'=>$article]);
    }

    public function detail($id)
    {
        $article = DB::table('article')->where('id', $id)->first();
        return view('detail', ['article'=>$article]);
    }

    public function add(){
        return view('add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image',
        ]);
        $data = $request->file('image')->store('images','public');

        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $data,
        ]);

        return redirect()->route('article')->with('success');
    }

    public function show_by_admin()
    {
        $articles = DB::table('article')->orderby('id', 'desc')->get();
        return view('adminshow', ['articles'=>$articles]);
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('edit', ['article' => $article]);
    }

    public function update(Request $request, $id)
    {   
        $article = Article::find($id);

        $article->title = $request->title;
        $article->content = $request->content;

        if($request->file('image')){
            // upload image
            $image = $request->file('image');
            $image->storeAs('public/images', $image->hashName());

            // delete old image
            Storage::delete('public/images/'. $article->image);

            // update post data image
            $article->update([
                'image' => $image->hashName(),
            ]);
        }

        $article->save();
        return redirect()->route('article')->with('success');
    }

    public function destroy($id)
    {
        Article::where('id', '=', $id)->delete();
        return redirect()->route('article')
            ->with('success', 'Article Berhasil Dihapus');
    }
}

