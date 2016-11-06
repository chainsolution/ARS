<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use Mail;
use Illuminate\Contracts\Filesystem\Filesystem;
use File;
use Log;

class PostsController extends Controller
{

    public function posts() {
      /*
      check whether session is available. If not redirect to default page(Login). If there is session available, go to registration page.
      */
      session_start();
      if(empty($_SESSION['username']))
      {
          return redirect('/');
      }
      else
      {

          return view ('Registration');
      }

    }

}
