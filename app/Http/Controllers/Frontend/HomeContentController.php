<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Admin\Category;

use Illuminate\Http\Request;

class HomeContentController extends Controller
{
    public function HomeContent(){  
        return view('pages.index');
    }
}
