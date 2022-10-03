<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Termwind\ValueObjects\p;
use App\Models\Category;
class CategoyControllerer extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create(Request $request)
    {
//        return $request->all();

        Category::newcategory($request);
        return redirect('/category/add')->with('message', 'Category Has Been Created');
    }

    public function manage()
    {
        return view('admin.category.manage');
    }

    public function edit()
    {
        return view('admin.category.edit');
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
