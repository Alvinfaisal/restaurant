<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Food;

class AdminController extends Controller
{
    // controller untuk kelola user
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }

    // controller untuk delete user
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    // conroller untuk halaman admin foodmenu
    public function foodmenu()
    {
        
        return view("admin.foodmenu");
    }

    // conroller untuk upload foodmenu
    public function upload(Request $request)
    {
        $data = new food;

        $image = $request->image;
        $imagename = time(). '.' .$image->getClientOriginalExtension();
                    $request->image->move('foodimage', $imagename);
                    $data->image= $imagename;

                    $data->title=$request->title;

                    $data->price=$request->price;

                    $data->description=$request->description;

                    $data->save();


                    // setelah data dikirim akan dikembalikan kehalaman semula
                    return redirect()->back();
                    


        

    }

    // public function namafungsiyangdibuatdiroute()
    // {
    //     $data=user::all();
    //     return view("fileviewyangakan ditampilkan");
    // }

    
}
