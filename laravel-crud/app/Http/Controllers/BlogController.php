<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use function League\Flysystem\Local\move;
use Session;

class BlogController extends Controller
{

    private $blog,$blogs;
    public function index()
    {
        Session::forget('id');
        return view('blog.index');
    }
    public function add()
    {
        return view('blog.add');

    }
    public function create(Request $request)
    {
        Blog::newBlog($request);

        return redirect('/add-blog')->with('message','Blog info create successfully');
    }

    public function manage()
    {
        Session::put('id',100);
        $this->blogs=Blog::all();
//        return $this->blogs;
        return view('blog.manage',['blogs'=>$this->blogs]);

    }

    public function edit($id)
    {
        $this->blog = Blog::find($id);
        return view('blog.edit',['blog'=>$this->blog]);
    }

    public function update(Request $request, $id)
    {
        Blog::updateBlog($request, $id);
        return redirect('/manage-blog')->with('message','Blog Info Update Successfully.');
    }

    public function delete($id)
    {
        Blog::deleteBlog($id);
        return redirect('/manage-blog')->with('message','Blog Info Delete Successfully.');
    }

}
