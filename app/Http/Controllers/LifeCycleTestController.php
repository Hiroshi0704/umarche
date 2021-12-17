<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    public function show()
    {
        app()->bind('sample', Sample::class);
        $sample = app()->make('sample');
        $sample->run();
        dd(app());
    }

    public function showServiceProviderTest() {
        $sample = app()->make('serviceProviderTest');
        dd($sample);
    }
}

class Sample
{
    public $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function run()
    {
        $this->message->send();
    }
}

class Message
{
    public function send()
    {
        echo('メッセージ表示');
    }
}
