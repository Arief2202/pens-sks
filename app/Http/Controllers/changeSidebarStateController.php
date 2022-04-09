<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class changeSidebarStateController extends Controller
{
    public function store(Request $request)
    {
        $user = User::where('email', 'like', $request->input('email'))->first();
        $user->openSideBar = $request->input('sideBarState');
        $user->save();
    }
}
