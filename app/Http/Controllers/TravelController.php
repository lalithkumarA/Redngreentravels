<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Category;
Use App\Image;
Use App\Additinerary;
Use App\Complementaries;
Use App\Multicategory;
Use App\User;


class TravelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   public function __construct(){
      $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function category(){
      return view('traveladmin.category');
    }

    public function addcategory(){ 
      $this->validate(request(),[
        'category'=>'required|unique:categories',
      ]);
        
      $store = new Category();
     
      $store->category=request('category');
      $store->save();
      return back();
    }


    public function viewcategory(){
      $categorytype = Category::all();
      return view('traveladmin.viewcategory',compact('categorytype'));
    }


    public function report(){
      $details=Additinerary::paginate(10);
      return view('traveladmin.viewitinerary',compact('details'));
    }


    public function itinerary(){
      $select=Category::all();
      $complementary=Complementaries::all();
      return view('traveladmin.itinerary',compact('select','complementary'));
    }
    
    
    public function additinerary(request $request){ 
        $this->validate(request(),[
            'category'=>'required',    
            'type'    =>'required',
            'trending'    =>'required',
            'packagename'   =>'required',
            'cost'    =>'required',
            'package_excludes'=>'required',
            'package_includes'=>'required',
            'terms_and_conditions'=>'required',
            'duration'=>'required',
            'highlights'=>'required',
            'overview'=>'required',
        ]);
        
        $store = new Additinerary();
        $store->type=request('type');
        $store->trending=request('trending');
        $store->packagename=ucfirst(strtolower(request('packagename')));
        $store->date=request('date');
        $store->cost=request('cost');
        $store->Package_Excludes=request('package_excludes');
        $store->Package_includes=request('package_includes');
        $store->Terms_and_conditions=request('terms_and_conditions');
        $store->duration=request('duration');
        $store->highlights=request('highlights');
        $store->itinerary=request('itinerary');
        $store->overview=request('overview');
        if(!empty(request('complementary'))){
        $store->complementary=serialize(request('complementary'));
        }
        $store->save();
        if ($category_id=request('category')){
            foreach ($category_id as $category){
              $multicategory=new Multicategory;
              $multicategory->itinery_id=$store->id;
              $multicategory->category_id=$category;
              $multicategory->save();
            }
        }
        
        if ($files=$request->file('images')){
            foreach ($files as $file){
                $url = $this->upload_picture($file);
                $image=new Image;
                if(!empty($url)){
                  $image->additineraries_id = $store->id;
                  $image->image_name = $url;
                  $image->save();

                }
            }
              
        }
      return back();
    }


    public function upload_picture($picture){
      $file_name = time();
      $file_name .= rand();
      $file_name = sha1($file_name);
      if ($picture){
        $ext = $picture->getClientOriginalExtension();
        $picture->move(public_path() . "/images", $file_name . "." . $ext);
        $local_url = '/images/'.$file_name . "." . $ext;
        return $local_url;
      }
      return "";
    }


    public function viewitinerary($id){
      $details=Additinerary::find($id);
      return view('traveladmin.fulldetail',compact('details'));
    }


    public function itineraryedit($id){
      $catagories=Category::get()->all();
      $complementary=Complementaries::all();
      $details=Additinerary::find($id);
      return view('traveladmin.itineraryedit',compact('details','catagories','complementary'));
    }


    public function itineraryupdate($id, Request $request ){ 
      $this->validate(request(),[
            'category'=>'required',    
            'type'    =>'required',
            'trending'    =>'required',
            'packagename'   =>'required',
            'cost'    =>'required',
            'package_excludes'=>'required',
            'package_includes'=>'required',
            'terms_and_conditions'=>'required',
            'duration'=>'required',
            'highlights'=>'required',
            'overview'=>'required',
        ]);
        $store = Additinerary::findOrfail($id);
        $store->type=request('type');
        $store->trending=request('trending');
        $store->packagename=request('packagename');
        $store->date=request('date');
        $store->cost=request('cost');
        $store->Package_Excludes=request('package_excludes');
        $store->Package_includes=request('package_includes');
        $store->Terms_and_conditions=request('terms_and_conditions');
        $store->duration=request('duration');
        $store->highlights=request('highlights');
        $store->itinerary=request('itinerary');
        $store->overview=request('overview');
        if(!empty(request('complementary'))){
          $store->complementary=serialize(request('complementary'));
        }
        $store->save();
        
        if(!empty(request('category'))){
          $Multicategories= Multicategory::where([['itinery_id',$store->id]])->get()->all();
            foreach ($Multicategories as $Multicategory){
                if(!in_array($Multicategory->category_id, request('category'))){
                    Multicategory::findorfail($Multicategory->id)->delete();
                }
            }
            foreach (request('category') as $updateCatagoryData) {
                if(empty(Multicategory::where([['itinery_id',$store->id], ['category_id', $updateCatagoryData]])->first())){
                    $multicategory=new Multicategory;
                    $multicategory->itinery_id=$store->id;
                    $multicategory->category_id=$updateCatagoryData;
                    $multicategory->save();
                }
          } 
        }else{
          $Multicategories= Multicategory::where([['itinery_id',$store->id]])->get()->all();
          foreach ($Multicategories as $Multicategory){
              Multicategory::findorfail($Multicategory->id)->delete();
          }
        }

        if ($files=$request->file('images')){
          foreach ($files as $file){
            $url = $this->upload_picture($file);
            $image=new Image;
              if(!empty($url)){
                $image->additineraries_id = $store->id;
                $image->image_name = $url;
                $image->save();
              }
          }
        }    
      return back();
    }



    public function itinerarydelete($id){
      $Additinerary = Additinerary::findOrFail($id);
      foreach ($Additinerary->multicatagories as $multicatagories) {
         Multicategory::findorfail($multicatagories->id)->delete();
      }
      $ImageData = Image::where('additineraries_id',$id)->get();
      foreach ($ImageData as $Image) {
        if(is_file(public_path().($Image->image_name))) {
           unlink(public_path().($Image->image_name));
        }
        $Image->delete();
      }
      $Additinerary->delete();
      return back();  
    }



    public function imagedelete($id){
      $Image = Image::find($id);
      if(is_file(public_path().($Image->image_name))) {
        unlink(public_path().($Image->image_name));
      }
        $Image->delete();
      return back();
    }


    public function complementary(request $request){
      return view ('traveladmin.complementary');
    }


    public function addcomplementary(Request $request){
        if ($files=$request->file('images')){
          foreach ($files as $file){
            $url = $this->complementary_picture($file);
              if(!empty($url)){
                $image=new Complementaries;
                $image->image_name = $url;
                $image->save();
              }
          }
        }
        return back();
    }


    public function complementary_picture($picture){
      $file_name = time();
      $file_name .= rand();
      $file_name = sha1($file_name);
        if ($picture){
          $ext = $picture->getClientOriginalExtension();
          $picture->move(public_path() . "/complementary_image", $file_name . "." . $ext);
          $local_url = '/complementary_image/'.$file_name . "." . $ext;
          return $local_url;
        }
      return "";
    }


    public function viewcomplementary(request $request){
      $complementary=Complementaries::all();
      return view ('traveladmin.viewcomplementary',compact('complementary'));
    }



    public function resetPassword(){
      return view('traveladmin.resetPassword');
    }

    public function PasswordUpdate(){
      $this->validate(request(),[
        'oldPassword'=>'required',    
        'password'    =>'required|confirmed|min:6',
      ]);

      $authundicated_user = User::find(auth()->user()->id);

      if (password_verify(request('oldPassword'), $authundicated_user->password)) {
        $authundicated_user->password = bcrypt(request('password'));
        $authundicated_user->save();
        return back()->with('success','Password updated successfully!!');
      }else{
        return back()->with('wrong','Current Password is Wrong !!');
      }
    }

}
