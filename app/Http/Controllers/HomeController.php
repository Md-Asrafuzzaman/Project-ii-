<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {

         $data = DB::table('news')->paginate(3);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data' =>$data]);
        }
    }
     public function admin()
    {

        return view('home');
        //   $data = DB::table('news')->paginate(3);
        //   if (count($data)>0) {
        //     //return view('admin.allpost',$data);
        //      return view('index',['data' =>$data]);
        // }
    }
    public function getBuilder() {
  //  $data['id']=$id;
  //  $id=$id;
  //  dd($id);
    // return view('admin.builder',compact('id'));
        return view('admin.editor');
    }

    public function postNews()
    {
        return view('admin.post');
    }
    public function saveNews(Request $request)
    {
        $data=array();
        $data['date'] = $request->input('date');
        $data['pageno'] = $request->input('pageno');
        $data['category'] = $request->input('category');

        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('newsimages');
        $image->move($destinationPath, $name);
        //dd($name);
        $data['image'] = $name;
        //$data['news_id'] = $request->input('news_id');
        DB::table('news')->insert($data);
        return redirect ('allpost');

    }
    else {
        dd("Image upload Failed!");
    }
           
        // $data['image'] = $request->input('image');
        // DB::table('news')->insert($data);

        //dd($Request);
       // return view('admin.post');
    }

    public function allpost() {
        $data = DB::table('news')->paginate(6);
        /*   dd($data);*/
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('admin.allpost',['data'=>$data]);
    }

}


        
}
