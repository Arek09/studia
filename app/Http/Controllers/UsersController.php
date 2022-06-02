<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AuthController;
use App\Models\User;
use App\Models\rank;
use App\Models\Product;
use Hash;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Session\SessionManager;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AuthController = New AuthController;
        $AuthController->sesExist();
        $data1 = $AuthController->sesExist();
        $data = $data1['data'];
   
        $count = User::count();
        
        $users = User::with('rank')->get();

        $usersRank = json_decode($users);

       

        return view('admin', compact('data', 'usersRank','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required|email|unique:users',
            'password'=> 'required|confirmed|min:8',

        ]);

        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/users');
    }

    public function showCreate(Request $request)
    {
        $AuthController = New AuthController;
        $AuthController->sesExist();
        $data1 = $AuthController->sesExist();
        $data = $data1['data'];

        return view('createUser', compact('data'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $AuthController = New AuthController;
        $AuthController->sesExist();
        $data1 = $AuthController->sesExist();
        $data = $data1['data'];

        $user = User::find($id);

        $rank = DB::table('rank')->get();

        return view('editUser', compact('user','data','rank'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Request $request, $id)
    {
        $user =  User::find($id);
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->rank_id = $request->input('rankName');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/images', $filename);
            $user->image= $filename;
        }
        $user->update();

        return redirect('/users');
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
    public function destroy($id)
    {
        $acctualEmail = User::where('id', '=', Session::get('loginId'))->first();
        $user = User::find($id);

        if ($acctualEmail['email'] == $user['email']) {
            Session::flash('message', 'Operacja niemożliwa!');
        }
        else {
            $user = User::findOrFail($id)->delete();
        }
        return redirect('/users');
    }
}
