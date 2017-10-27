<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function register(Request $request)
  {
    // dd($request->all());
    $data= new User();
    $data->name=$request->name;
    $data->email=$request->email;
    $data->password=bcrypt($request->password);
    $data->save();
    return "berhasil Menambah Data";
  }
  // public function delete($id)
  // {
  //   $deletelist = User::find($id);
  //   $deletelist->delete();
  //   return "Berhasil Menghapus Data";
  // }
}
