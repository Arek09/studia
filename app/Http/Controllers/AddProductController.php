<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AuthController;

use Session;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product;


class AddProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'weapon_number'=>'required',
            'weapon_name'=>'required',
            'weapon_mag'=>'required',
            'weapon_asg_dek'=> 'required',
            'image'=> 'required',

        ]);

        $product = New Product;
        $product->weapon_number = $request->weapon_number;
        $product->weapon_name = $request->weapon_name;
        $product->type_weapon = $request->type_weapon;
        $product->weapon_mag = $request->weapon_mag;
        $product->weapon_asg_dek = $request->weapon_asg_dek;
        if($request->hasfile('image')) {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/images', $filename);
            $product->image= $filename;

        }
       $product->save();

       return  redirect('/table');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $producs = Product::all();

        $AuthController = New AuthController;
        $AuthController->sesExist();
        $data1 = $AuthController->sesExist();
        $data = $data1['data'];

        return view('table',compact('data'),compact('producs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {

        $AuthController = New AuthController;
        $AuthController->sesExist();
        $data1 = $AuthController->sesExist();
        $data = $data1['data'];

        $product = Product::find($id);


        return view('edit',compact('data','product'));

    }

    public function updateProduct(Request $request,$id)
    {

        $product = Product::find($id);
        $product->weapon_number = $request->input('weapon_number');
        $product->weapon_name = $request->input('weapon_name');
        $product->type_weapon = $request->input('type_weapon');
        $product->weapon_mag = $request->input('weapon_mag');
        $product->weapon_asg_dek = $request->input('weapon_asg_dek');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/images', $filename);
            $product->image= $filename;
        }

        $product->update();
        return redirect('/table');

    }

    public function editUse(Request $request)
    {

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        $request = Product::findOrFail($id)->delete();

        return redirect('/table',301);
    }
}
