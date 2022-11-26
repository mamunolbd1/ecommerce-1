<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Category;
use Session;
use Image;
use File;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id','desc')->get();
        return view('admin.pages.categories.index',compact('categories'));
      
    }
    public function create(){
        $main_categories = Category::orderBy('id','desc')->where('parent_id',NULL)->get();
        return view('admin.pages.categories.create',compact('main_categories'));
      
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'image' => 'nullable|image',
        ],
    [
        'name.required' => 'Please Provide a category name',
        'image.image' => 'Please provide a valid image with .jpg , .jpeg, .gif , .png extension',

    ] );

    $category = new Category;
    $category->name = $request->name;
    $category->description = $request->description;
    $category->parent_id = $request->parent_id;

    //Insert IMage
    // if(($request->image)>0){
    //         $image = $request->file('image');
    //         $img = time().'.'. $image->getClientOriginalExtension();
    //         $location = public_path('images/categories/'.$img);
    //         Image::make($image)->save($location);
    //         $category->image = $img;
    // }
    // dd($request->image);
    if ($request->image) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = 'images/categories/' .$img;
        Image::make($image)->save($location);
        $category->image = $img;
    }
    
    $category->save();

    Session::flash('msg','A new Category has Successfully Added');
    return redirect()->route('admin.categories');
    }

    public function edit($id){
        $main_categories = Category::orderBy('id','desc')->where('parent_id',NULL)->get();
        $category = Category::find($id);
        if(!is_null($category)){
            return view('admin.pages.categories.edit',compact('category','main_categories'));
        }else{
            return redirect()->route(admin.categories);
        }
      
      
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'name' => 'required',
            'image' => 'nullable|image',
        ],
    [
        'name.required' => 'Please Provide a category name',
        'image.image' => 'Please provide a valid image with .jpg , .jpeg, .gif , .png extension',

    ] );

    $category = Category::find($id);
    $category->name = $request->name;
    $category->description = $request->description;
    $category->parent_id = $request->parent_id;

    if ($request->image) {

        //Deleted old image from folder
        if(File::exists('images/categories/'.$category->image)){
            File::delete('images/categories/'.$category->image);
        }

        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = 'images/categories/' .$img;
        Image::make($image)->save($location);
        $category->image = $img;
    }
    
    $category->save();

    Session::flash('msg','A new Category has Successfully Updated');
    return redirect()->route('admin.categories');
    }

    public function delete($id){
        $category = Category::find($id);
        if(!is_null($category)){
            // if it is parent category then delete all of its sub category
            if($category->parent_id == NULL){
                //Deleted Sub Category
                $sub_categories = Category::orderBy('id','desc')->where('parent_id',$category->id)->get();

                foreach($sub_categories as $sub){
                     //Delete Sub Category Image
                    if(File::exists('images/categories/'.$category->image)){
                     File::delete('images/categories/'.$category->image);
                    }
                    $sub->delete();

                }
              
            }

            //Delete Category Image
            if(File::exists('images/categories/'.$category->image)){
                File::delete('images/categories/'.$category->image);
            }
            $category->delete();
        }
        Session::flash('msg','category Deleted Successfully');
        return back();
    }

    
}
