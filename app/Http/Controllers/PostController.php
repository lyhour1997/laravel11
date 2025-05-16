<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function index()
    {
        $data['posts'] = DB::table('posts')
                    ->where('status',1)
                    ->get();
        return view('posts.index', $data);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function save(Request $r)
    {
        $data = array(
            'title'       => $r->title,
            'description' => $r->description,
        );

        $save  = DB::table('posts')->insert($data);

        if($save){
            return redirect('/');

        }else{
            return redirect('/');
        }
    }

    public function edit($id)
    {
        $edit = DB::table('posts')->find($id);

        return view('posts.edit', compact('edit') );
    }

    public function update(Request $r)
    {

        $r->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $data = array(
            'title'       => $r->title,
            'description' => $r->description,
        );

        // dd($r->id);

        $i = DB::table('posts')
            ->where('id', $r->id)
            ->update($data);

        if ($i) {
            return redirect('/')
                ->with('success', 'Post updated successfully!');
        } else {
            return redirect('/')
                ->with('error', 'Update failed or no changes detected.');
        }
    }

    public function delete($id)
    {
        $del = DB::table('posts')
            ->where('id', $id)
            ->update(['status'=>0]);

        if($del){
            return redirect('/');
        }
    }

}
