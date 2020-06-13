<?php

namespace App\Mail;

use App\Pengguna;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CrawlinggEmail extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct()
    {
        //$this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build($email)
    {
       return $this->from('hezinack@gmail.com')
                   ->view('emailku')
                   ->with(
                    [
                        'nama' => $email,
                        'website' => 'www.crawlingg.com',
                    ]);
    }
}


