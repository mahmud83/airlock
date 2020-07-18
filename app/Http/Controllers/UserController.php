<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = User::orderBy('id','desc')
        ->where('role','user')->paginate(20);
        
        return view('users.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'name'      => 'required',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|same:password_confirmation',
            'password_confirmation' => 'required'
        ]);

        $data = [
            'email'     => $request->email,
            'name'      => $request->name,
            'password'  => bcrypt($request->password)
        ];

        User::create($data);
        
        return redirect(route('users.create'))
        ->with('success', 'User create successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users,email,'.$user->id
        ]);

        $data = [
            'email'     => $request->email,
            'name'      => $request->name
        ];

        $user->update($data);
        
        return redirect(route('users.index'))
        ->with('success', 'User update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect(route('users.index'))
        ->with('success', 'User delete successfuly');
    }

    /**
     * [upload description]
     * @return [type] [description]
     */
    public function upload()
    {
        return view('users.upload');
    }

    /**
     * [import description]
     * @return [type] [description]
     */
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');
        $nama_file = rand().$file->getClientOriginalName();
        $file->move('file_user',$nama_file);
 
        try {
            Excel::import(new UsersImport, public_path('/file_user/'.$nama_file));
        } catch (\Exception $e) {
            return redirect(route('users.upload'))
            ->with('error', $e->getMessage());
        }
        return redirect(route('users.upload'))
        ->with('success', 'User import successfuly');
    }

    /**
     * [changePassword description]
     * @return [type] [description]
     */
    public function changePassword()
    {
        return view('users.change-password');
    }

    /**
     * [storeChangePassword description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function storeChangePassword(Request $request)
    {
        $request->validate([
            'password'  => 'required|same:password_confirmation',
            'password_confirmation' => 'required'
        ]);

        $user = auth()->user();
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect(route('users.change-password'))
        ->with('success', 'Password change successfuly');
    }
}
