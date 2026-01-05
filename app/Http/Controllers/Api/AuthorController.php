<?php

namespace App\Http\Controllers\Api;

use App\Models\Author;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\ResponseHelper;


class AuthorController extends Controller
{
    
    public function index()
    {
        $authors =  Author::all();
       return ResponseHelper::success(' جميع المؤلفين',$authors);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:70'
        ]);
        $author = new Author();
        $author->name = $request->name;
        $author->save();
        return ResponseHelper::success("تمت إضافة المؤلف" , $author);
    }
  
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => "required|max:70"
        ]);

        $author = Author::find($id);
        $author->name = $request->name;
        $author->save();
        return ResponseHelper::success("تم تعديل معلومات االمؤلف" , $author);

    }

    public function destroy(string $id)
    {
        $author = Author::find($id);
        $author->delete();
        return ResponseHelper::success("تم حذف المؤلف" , $author);
    }
}
