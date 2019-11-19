<?php

namespace App;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $email;
    protected $msg;
    protected $file;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    // Изменим метод __construct, чтобы передавать содержимое формы обратной связи в качестве параметра
    // при создании экземпляра данного класса.

    public function __construct($name, $email, $msg, $file)
    {
        $this->name=$name;
        $this->email=$email;
        $this->msg=$msg;
        $this->file=$file;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    //В методе build, укажем blade-шаблон для наших сообщений:
    public function build()
    {
        return $this->view('emails/contact-mail')
            ->with([
                'name'=>$this->name,
                'email'=>$this->email,
                'msg'=>$this->msg,
                'file'=>$this->file
            ])
            //Тема письма "Новое письмо"
        ->subject('Новое письмо');
    }
}
