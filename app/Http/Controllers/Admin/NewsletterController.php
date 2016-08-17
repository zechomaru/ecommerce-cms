<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsletterController extends Controller
{
    public function index()
    {
      $newsletters = Newsletter::get();
      return view('admin.newsletters.index', ['newsletters' => $newsletters]);
    }
}
