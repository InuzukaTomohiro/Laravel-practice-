<?php

declare(strict_type=1);

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Mail\Mailer; //追加
use App\Models\User;  //追加
// use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Queue\InteractsWithQueue;

class RegisteredListener
{
  private $mailer;  //追加
  private $eloquent;  //追加

    /**
     * Create the event listener.
     */
    public function __construct(Mailer $mailer, User $eloquent)
    {
      $this->mailer = $mailer;
      $this->eloquent = $eloquent;
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Registered $event): void
    {
      $user = $this->eloquent->findOrFail($event->user->getAuthIdentifier());
      $this->mailer->raw('会員登録完了しました。', function ($message) use ($user) {
        $message->subject('会員登録メール')->to($user->email);
      });
        //
    }
}
