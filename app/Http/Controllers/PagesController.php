<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BloodRequest;
use App\Models\Donation;
use App\Models\Post;
use App\Models\Category;
use Session;
use Auth;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function getlookingforbloodpage(){
    	return view('pages.lookingforblood');
    }

    public function getCheckCodePageForBloodRequest($id){
        
        if(Session::get('reqcode')=='valid' && Session::get('reqcodeid')==$id){
        	return redirect()->route('requests.edit',$id);
        }
        return view('pages.checkrequestcode')->withId($id);
    }

    public function postCheckCodeForBloodRequest(Request $request, $id){
        
    	$RequestId = BloodRequest::find($id);
    	$code = $RequestId->code;
    	if($code==$request->code){
    		Session::put('reqcode', 'valid');
    		Session::put('reqcodeid', $id);
           return redirect()->route('requests.edit',$id);
    	}else{
    		 Session::flash('logindonorerror','Sorry!!! Wrong Code.');
             return redirect()->back();
    	}

    }

    public function getAllDonorLists(){

      $donors = User::where('is_show_profile','=',1)->orderBy('id','asc')->get();
      return view('pages.donorlists')->withDonors($donors); 
    }

  
    public function getDonorProfileViewPage($id){
       
       $donor = User::find($id);
       return view('pages.viewprofile')->withDonor($donor);
    }

    public function getBlogPage(){
       $categories = Category::orderBy('id','desc')->get();
       $posts = Post::orderBy('id','desc')->paginate(6);
       return view('blog.blog')->withPosts($posts)->withCategories($categories);
    }

    public function getBlogSinglePage($slug){

      $post = Post::where('slug','=',$slug)->first();
      $categories = Category::orderBy('id','desc')->get();
      $rposts = Post::orderBy('id','desc')->take(4)->get();
      return view('blog.single')->withPost($post)->withCategories($categories)->withRposts($rposts);
    }

    public function getPostByCategory($name){
      $getcatid = Category::where('name','=',$name)->first();
      $catid = $getcatid->id;
      $posts = Post::where('category_id','=',$catid)->orderBy('id','desc')->paginate(6);
      $categories = Category::orderBy('id','desc')->get();
      $rposts = Post::orderBy('id','desc')->take(4)->get();
      return view('blog.categorypost')->withPosts($posts)->withCategories($categories)->withRposts($rposts)->withCategoryname($name);
    }

    public function postSearchResult(Request $request){
      $ser_text = $request->search;
      $posts = Post::where('title','LIKE','%'.$ser_text.'%')
                   ->orderBy('id','desc')
                   ->paginate(6);
      $categories = Category::orderBy('id','desc')->get();
      $rposts = Post::orderBy('id','desc')->take(4)->get();
      return view('blog.searchresult')->withPosts($posts)->withCategories($categories)->withRposts($rposts)->withSearchby($ser_text);
    }

    public static function  donorstatus($value,$wdn){
       
        $lastddate = Carbon::parse($value);//->diffForHumans()
        $currentdate=  Carbon::now('Asia/Dhaka');
        $lastddate->addDays(120);
        $checkd= $currentdate->gt($lastddate);
        $msg="";
        if(empty($value) && $wdn==1){
           $msg = 'allready';
        }
        elseif(empty($value) && $wdn==2){
           $msg = 'notready';
        }
        elseif($checkd==false){
          $msg = 'cannot';
        }elseif($checkd==true && $wdn==1){
           $msg = 'allready';
        }elseif($checkd==true && $wdn==2){
           $msg = 'notready';
        }

        return $msg;
    }
}
