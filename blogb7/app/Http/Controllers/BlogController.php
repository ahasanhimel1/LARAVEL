<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
class BlogController extends Controller
{
    private $categories;
    public function index()
    {
        $this->categories = Category::where('status', 1)->get();
        return view('admin.blog.index', ['categories' => $this->categories]);
    }

    public function create(Request $request)
    {
//        return $request->all();

        Blog::newBlog($request);
        return redirect('/blog/add')->with('message', 'Blog Info Has Been Created');
    }

    public function manage()
    {
        return view('admin.blog.manage');
    }

    public function edit()
    {
        return view('admin.blog.edit');
    }

    public function update(Request $request, $id)
    {
        return $request->all();
    }

    public function delete($id)
    {
        return $id;
    }
}
