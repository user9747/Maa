<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Reminder;
use GuzzleHttp\Client;

class SendReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminders:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send commands using Twilio';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $client = new Client();
        date_default_timezone_set("Asia/Kolkata");
        $now = date('H:i');
        $now= $now.':00';
        $reminders = Reminder::where('time','=',$now)->get();
        if(count($reminders)>0){
        foreach($reminders as $reminder){
            $title = $reminder->title;
            $msg = $reminder->body;
            $mail = $reminder->user->email;
            $res = $client->request('POST', 'http://localhost:3000/send', [
                'form_params' => [
                    'title' => $title,
                    'msg' => $msg,
                    'email' => $mail
                ]
            ]);
        }
        }
    }
}
