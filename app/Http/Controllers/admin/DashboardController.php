<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\Carsm;
use App\Models\Event;
use App\Models\Mission;
use App\Models\User;
use Carbon\Carbon;
use App\Models\MissionArchive;

use App\Models\ConducteurConger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function AdminDashboard()
    {
      
    
        return view('admin.index');
    }
}
