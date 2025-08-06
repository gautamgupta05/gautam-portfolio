<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home() {
        return view('pages.home');
    }
    public function about() {
        return view('pages.about');
    }
    public function resume() {
        return view('pages.resume');
    }
     public function portfolio() {
        return view('pages.portfolio');
    }
    public function skills() {
        return view('pages.skills');
    }
    public function contact() {
        return view('pages.contact');
    }
}
