<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThemeController extends Controller
{
    public function switch(Request $request)
    {
        $theme = $request->input('theme', 'dark');
        $request->session()->put('theme', $theme);
        return response()->json(['status' => 'success']);
    }
}
