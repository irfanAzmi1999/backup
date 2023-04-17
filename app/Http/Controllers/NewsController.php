<?php

namespace App\Http\Controllers;

use App\Models\pharagraph;
use Illuminate\Http\Request;
use App\Models\news;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Helpers\LogActivity;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.manageNews',['post'=>news::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.addNews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pic = $request->file('news_image');
//        $pharagraph = $request->input('content');


        $news = new news;
        $news->texteditor = $request->input('textSample');
        $news->shortContent = $request->input('generatedText');
        $news->news_title=$request->input('news_title');
        $news->user_id=Auth()->user()->id;
        $news->image_name = $pic->getClientOriginalName();
        $news->save();

//        foreach ($pharagraph as $p)
//        {
//            $pharagraphDB = new pharagraph;
//            $pharagraphDB->content = $p;
//            $news->pharagraphs()->save($pharagraphDB);
//        }

        $request->file('news_image')->storeAs('public/images/news/'.$news->id,$pic->getClientOriginalName());

        LogActivity::addToLog('Add News :'.$news->news_title);
        return redirect()->route('news.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Admin.show_news',['post'=>news::with('pharagraphs')->findorFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Admin.editNewsForm',['post'=>news::with('pharagraphs')->findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        $perenggan = $request->input('content');
        $pic = $request->file('news_image');

        $news = news::findorFail($id);
        if ($pic!=null)
        {
            $news->image_name = $pic->getClientOriginalName();
            $pic->storeAs('public/images/news/'.$news->id,$pic->getClientOriginalName());
        }
        $news->news_title = $request->input('news_title');
        $news->texteditor = $request->input('textSample');
        $news->shortContent = $request->input('generatedText');
        $news->save();

        $phara = pharagraph::where('news_id','=',$id);
        $phara->delete();

//        foreach ($perenggan as $key=>$item)
//        {
//            $newPhara = new pharagraph;
//            $newPhara->content = $item;
//            $news->pharagraphs()->save($newPhara);
//         }
        Session::flash('message','News updated');
        LogActivity::addToLog('Update News :'.$news->news_title);
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = news::findorFail($id);
        $news->delete();

        Session::flash('message','News Deleted Successfully');
        LogActivity::addToLog('Remove News');
        return Redirect::back();
    }
}
