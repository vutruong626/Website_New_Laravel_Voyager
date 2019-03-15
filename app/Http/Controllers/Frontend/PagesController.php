<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\News;

class PagesController extends Controller
{
    public function index(Request $request){
        
        $slider = Slider::select('title','image')->orderBy('id','DESC')->skip(0)->take(5)->get();
        $news = News::select('id','name','title','content','image')->where('category_id',1)->orderBy('id','DESC')->skip(0)->take(1)->get();
        $news_righ = News::select('id','name','title','content','image')->where('category_id',2)->orderBy('id','DESC')->skip(0)->take(1)->get();
        $clup = News::select('id','name','title','content','image')->where('category_id',3)->orderBy('id','DESC')->skip(0)->take(1)->get();
        $detail = News::select('id','name','title','content','image')->first();
        // print_r($news);die;
        return view('frontend.pages.index',compact('slider','news','news_righ','clup','detail'));
    }


    public function contact(){
        return view('frontend.pages.contact');
    }
    
    public function getimages(){
        return view('frontend.detail.images');
    }

    public function getdetail(){
        $news = News::select('id','name','title','content','image')->where('category_id',1)->orderBy('id','DESC')->first();
        return view('frontend.detail.detail',compact('news'));
    }
}
