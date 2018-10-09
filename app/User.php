<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Naux\Mail\SendCloudTemplate;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'confirmation_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $data = [
            'url' => url('password/reset' , [
                $token
            ]),
        ];
        $template = new SendCloudTemplate('xiaohtstyle_reset_password', $data);

        Mail::raw($template, function ($message) {
            $message->from('xiaohaitao_1995@163.com', 'xiaohtstyle');

            $message->to($this->email);
        });
    }
}
