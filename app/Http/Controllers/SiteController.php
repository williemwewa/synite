<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;

class SiteController extends Controller
{
    public function home()
    {
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        return view('pages.home');
    }
    public function aboutUs()
    {
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        return view('pages.about-us');
    }
    public function contacts()
    {
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        return view('pages.contacts');
    }
    public function csr()
    {
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        return view('pages.csr');
    }
    public function ourTeam()
    {
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        return view('pages.our-team');
    }
    public function projects()
    {
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        return view('pages.projects');
    }
    public function who_we_are()
    {
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        return view('pages.who_we_are');
    }
    public function products()
    {
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        return view('pages.products');
    }
    public function safety()
    {
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        return view('pages.safety');
    }

    
}
