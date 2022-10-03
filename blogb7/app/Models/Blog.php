<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Blog extends Model
{
    use HasFactory;

    private static $message,$blog, $image , $imageName, $imageUrl, $directory, $extension;

    public static function getImageUrl($request){
        self::$image=$request->file('image');
        self::$extension=self::$image->getClientOriginalExtension();
        self::$imageName='blogb7_'.time().".".self::$extension;
        self::$directory='upload/blog-images/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newBlog($request)
    {
//        echo "Blog Model";
//        exit();

        self::$blog=new Blog();
        self::$blog->category_id=$request->category_id;
        self::$blog->author=Auth::user()->id;
        self::$blog->title=$request->title;
        self::$blog->description=$request->description;
        self::$blog->image=self::getImageUrl($request);
        self::$blog->status=$request->status;
        self::$blog->date=date('Y-m-d');
        self::$blog->save();

    }


}
