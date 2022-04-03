<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;

class BlogController extends Controller
{
    private $blog;
    private $blogs;
    private $categories;

    public function index()
    {
        $this->categories = Category::all();
        return view('admin.blog.add', ['categories' => $this->categories]);
    }
    public function create(Request $request)
    {
        Blog::newBlog($request);
        return redirect()->back()->with('message', 'New blog added successfully');
    }
    public function manage()
    {
        $this->blogs = Blog::orderBy('id', 'desc')->get();
        return view('admin.blog.manage', ['blogs'=> $this->blogs]);
    }
    public function edit($id)
    {
        $this->blog = Blog::find($id);
        $this->categories = Category::all();
        return view('admin.blog.edit',['blog'=>$this->blog, 'categories'=>$this->categories]);
    }
    public function update(Request $request, $id)
    {
        Blog::updateBlog($request, $id);
        return redirect('/manage-blog')->with('message', 'Blog info Updated successfully');
    }
    public function delete($id)
    {
        $this->blog = Blog::find($id);
        $this->blog->delete();
        return redirect()->back()->with('message', 'Blog info deleted successfully');
    }
    public function detail($id)
    {
        $this->blog = Blog::find($id);
        return view('admin.blog.detail', ['blog' => $this->blog]);
    }
}
