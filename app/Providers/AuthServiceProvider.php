<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        VerifyEmail::toMailUsing(function(User $user, string $verficationUrl){
            return (new MailMessage)
                ->greeting('سلام')
                ->subject('تایید ایمیل')
                ->line('برای تایید ایمیل روی لینک زیر کلیک کنید. اگر شما این حساب را ایجاد نکرده اید، این ایمیل را نادیده بگیرید.')
                ->action('تایید',$verficationUrl);
                
        });

        //
    }
}
