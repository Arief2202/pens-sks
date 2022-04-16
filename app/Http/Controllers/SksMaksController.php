<?php

namespace App\Http\Controllers;

use App\Models\SksMaks;
use Illuminate\Http\Request;

class SksMaksController extends Controller
{
    public function showUpdate()
    {
        $nilaiSKSMaks = SksMaks::where('id','like', '1')->first();
        return view('sksMaks.update', [
            'sksMaks' => $nilaiSKSMaks,
        ]);
    }

    public function saveUpdate(Request $request)
    {
        $sksMaks = SksMaks::where('id','like', '1')->first();
        $sksMaks->nilaiSKSMaks = $request->nilaiSKSMaks;
        $sksMaks->save();

        return redirect("/dashboard");
    }
}
