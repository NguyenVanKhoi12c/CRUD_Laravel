<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function index()
    {
        $blogs = Blog::all();
        return view('customer.list', compact('blogs'));
    }

    function create()
    {
        return view('customer.create');
    }

    function store(Request $request)
    {
        $customers = new Blog();
        $customers->title = $request->title;
        $customers->author = $request->author;
        $customers->content = $request->contents;
        $customers->save();
        return redirect()->route('customer.index');
    }

    function delete($id)
    {
        $customers = Blog::find($id);
        $customers->delete();
        return redirect()->route('customer.index');
    }
}
