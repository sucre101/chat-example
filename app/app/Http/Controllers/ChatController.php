<?php

namespace App\Http\Controllers;

use App\Events\MessageEvent;
use Illuminate\Http\Request;

class ChatController extends Controller
{
  /**
   * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function index()
  {
    return view('home');
  }


  /**
   * method send event with message to redis
   * @param Request $request
   * @return void
   */
  public function handle(Request $request): void
  {
    event(new MessageEvent($request->post('text')));
  }
}
