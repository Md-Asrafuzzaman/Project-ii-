<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class NewsimageController extends Controller
{  
    public function image()
    {
    	return view('admin.postnews_img');
    }
    public function saveimg(Request $request)
    {
        $data=array();
        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('newsimages');
        $image->move($destinationPath, $name);
        //dd($name);
        $data['image'] = $name;
        //$data['news_id'] = $request->input('news_id');
        DB::table('img_news')->insert($data);
       //return back()->with('success','Image Upload successfully');*/
        return redirect('allimage');

    }
    else {
        dd("Image upload Failed!");
    }
    }
    public function allimage() {
        $data = DB::table('img_news')->orderBy('id','desc')->paginate(6);


        if (count($data)>0) {
            return view('pages.imageView',['data'=>$data]);

            // view('AdminPanel',['data'=>$data]);

    }
}
    public function imageZoom() {
        $data = DB::table('img_news')->orderBy('id','desc')->paginate(6);


        if (count($data)>0) {
            return view('pages.newsZoom',['data'=>$data]);

            // view('AdminPanel',['data'=>$data]);

    }
}

}
