<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class QueueStatusController extends Controller
{
    public function status(): View
    {
        $jobs = DB::table('jobs')->select('id', 'payload', 'available_at', 'created_at', 'status')->get();
        return view('jobs', [
            'jobs' => $jobs
        ]);
    }
}
