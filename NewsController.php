<?php

namespace App\Http\Controllers;
use App\Http\Requests\NewsRequest;
use App\Http\Requests;
use Carbon\Carbon;
use App\News;
use Request;

class NewsController extends Controller
{
    //routing to the upload form url.
    public function upload_news(){
        return view('forms.news_upload_form');
    }

    //validate news input and save in the schema
    public function saveNews(NewsRequest $request){

        $newsInput=Request::all();
        $news=new News;

        $news->Category=$newsInput['Category'];
        $news->Heading=$newsInput['Heading'];
        $news->Body=$newsInput['Body'];
        $news->Publisher='Phanul Ayuka';

        $news->save();

        return redirect('/home');
    }
    //end of save news inputs
}
