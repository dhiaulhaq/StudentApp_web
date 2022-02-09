<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorizationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewData()
    {
        $this->authorize('view data');

        return 'view data';
    }

    public function createData()
    {
        $this->authorize('create data');

        return 'create data';
    }

    public function editData(User $user)
    {
        $this->authorize('edit data');

        return view('edit', compact('user'));
    }

    public function updateData(Request $request, User $user)
    {
        $this->authorize('update data');

        $request->validate([
            'name' => 'required',
            'faculty' => 'required',
            'major' => 'required',
            'address' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('photo')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['photo'] = "$profileImage";
        } else {
            unset($input['photo']);
        }

        $user->update($input);

        return redirect()->route('home')
            ->with('success', 'Berhasil memperbarui user');
    }

    public function deleteData(User $user)
    {
        $this->authorize('delete data');

        $user->delete();

        return redirect()->route('home')
            ->with('delete', 'Berhasil menghapus user');
    }
}
