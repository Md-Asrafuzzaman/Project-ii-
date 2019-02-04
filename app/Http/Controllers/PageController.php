<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {   

        $data = DB::table('news')->where('date', '2018-12-10')->paginate(3);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data' =>$data]);
        }
    	
    }
    public function sports()
    {   

        $data = DB::table('news')->where('category', 'Sports')->paginate(3);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        else
            dd("No news match for this search item");
        
    }

    public function bangladesh()
    {   

        $data = DB::table('news')->where('category', 'Bangladesh')->paginate(3);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        else
            dd("No news match for this search item");
        
    }
    public function international()
    {   

        $data = DB::table('news')->where('category', 'International')->paginate(7);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('pages.inter',['data'=>$data]);
        }
        else
            dd("No news match for this search item");
        
    }
    public function business()
    {   

        $data = DB::table('news')->where('category', 'Business')->paginate(3);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        else
            dd("No news match for this search item");
        
    }
    public function political()
    {   

        $data = DB::table('news')->where('category', 'Political')->paginate(3);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        else
            dd("No news match for this search item");
        
    }
    public function agriculture()
    {   

        $data = DB::table('news')->where('category', 'Agricultur')->paginate(3);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        else
            dd("No news match for this search item");
        
    }
    public function binodon()
    {   

        $data = DB::table('news')->where('category', 'Entertinement')->paginate(3);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        else
            dd("No news match for this search item");
        
    }
    public function city()
    {   

        $data = DB::table('news')->where('category', 'City')->paginate(3);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        
    }
    public function campus()
    {   

        $data = DB::table('news')->where('category', 'Campus')->paginate(3);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        else
            dd("No news match for this search item");
        
    }
    public function ad()
    {   

        $data = DB::table('news')->where('category', 'Advertisement')->paginate(3);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        else
            dd("No news match for this search item");
        
    }
    public function search(Request $request)
    {   
        $search = $request->search;
        $data = DB::table('news')->orwhere('category','like','%'.$search.'%')->orwhere('date','like','%'.$search.'%')->paginate(8);
        $data->appends(['search' => $search]);

        if (count($data)>0) {
            //return view('admin.allpost',$data);
            //$count = (count($data));
            return view('pages.search',['data'=>$data]);

        }
        else
            dd("No news match for this search item");
        
    }


    public function about()
    {
    	return view('pages.about');
    }
  
    public function contuct()
    {
    	return view('pages.contact');
    }
    public function advertisement()
    {
        $data = DB::table('news')->where('category', 'Advertisement')->paginate(10);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('pages.ad',['data'=>$data]);
        }
    }
}
