<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function create() {
    	return view('CRUD.create');
    }
    public function store(Request $request) {
    	// dd($request->all());
    	$request->validate([
    		'title' => 'required|unique:post',
    		'body' => 'required' 
    	]);
    	$query = DB::table('pertanyaan')->insert([
    		"title" => $request["title"],
    		"body" => $request["body"] 
    	]);
    	return redirect('/pertanyaan/create');
    }
    public function index(){
    	$pertanyaan = DB::table('pertanyaan')->get();
    	// dd($pertanyaan);
    	return view('CRUD.index', compact('pertanyaan'));
    }
    public function show($id) {
    	$pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
    	return view('pertanyaan.show', compact('post'));
    }
    public function edit($id) {
    	$pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
    	return view('pertanyaan.edit', compact('post'));
    }
    public function update($id, Request $request){
    	$request->validate([
    		'title' => 'required|unique:pertanyaan',
    		'body' => 'required'
    	]);


    	$query = DB::table('pertanyaan')->where('id', $id)->
    	update([
    	'title' => $request['title'],
    	'body' => $request['body']
    	]);
    return redirect('/pertanyaan')->width('success', 'berhasil update post!');
    }
    public function destroy($id) {
    	$query = DB::table('pertanyaan')->where('id', $id)->delete();
    	return redirect('/pertanyaan')->width('success', 'post berhasil dihapus');
    }
}
