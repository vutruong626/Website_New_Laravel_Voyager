<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\News;

class PagesController extends Controller
{
    public function index(){

        $slider = Slider::select('title','image')->orderBy('id','DESC')->skip(0)->take(5)->get();
        $news = News::select('id','name','title','content','image')->where('category_id',1)->orderBy('id','DESC')->skip(0)->take(5)->get();
        $news_righ = News::select('id','name','title','content','image')->where('category_id',2)->orderBy('id','DESC')->skip(0)->take(5)->get();
        return view('frontend.pages.index',compact('slider','news','news_righ'));
    }


    public function contact(){
        return view('frontend.pages.contact');
    }

    public function getimages(){
        return view('frontend.detail.images');
    }
}
