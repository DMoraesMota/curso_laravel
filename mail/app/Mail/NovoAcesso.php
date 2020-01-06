<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NovoAcesso extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->view('Mails.novoacesso')
            ->with([
                'nome' => $this->user->name,
                'email' => $this->user->email,
                'datahora' => now()->setTimezone('America/Sao_Paulo')->format('d-m-Y H:i')
            ])->attach(base_path() . '/arquivos/linux.pdf');
    }
}
