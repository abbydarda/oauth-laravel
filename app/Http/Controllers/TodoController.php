<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
      $list = Todo::all();
      return $list;
    }

    public function insert(Request $request)
    {
      // dd($request->all());
      $data= new Todo();
      $data->name_todo=$request->name_todo;
      $data->user_id=$request->user_id;
      $data->save();
      return "berhasil Menambah Data";
    }

    public function update(Request $request, $id)
    {
      $updatelist = Todo::find($id);
      $updatelist->name_todo = $request->name_todo;
      $updatelist->user_id = $request->user_id;
      $updatelist->save();
      return "Berhasil Merubah Data";
    }
    public function delete($id)
    {
      $deletelist = Todo::find($id);
      $deletelist->delete();
      return "Berhasil Menghapus Data";
    }
    public function insertall(Request $request)
    {
      $json = $request->input('data');
      foreach ($json as $a) {
          $data = new Todo();
          $data->name_todo = $a['name_todo'];
          $data->user_id = $a['user_id'];
          $data->save();
      }
      return "Berhasil Menyimpan Data";
    }
}
