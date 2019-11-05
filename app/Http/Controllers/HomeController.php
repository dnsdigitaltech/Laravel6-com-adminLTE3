<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $date['title'] = 'Dashboard';
        $date['subtitle'] = 'Laravel 6 com AdminLTE 3';
        $date['fapage'] = 'nav-icon fas fa-tachometer-alt';
        return view('content.home', $date);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function page()
    {
        $date['title'] = 'Dashboard';
        $date['subtitle'] = 'Página 1';
        $date['fapage'] = 'fas fa-paste';
        return view('content.page', $date);
    }
}
