# Lab Authentication Laravel
## Install laravel ui

```bash
composer require laravel/ui
php artisan ui bootstrap --auth
```

- **infyom**
```bash
composer require infyomlabs/laravel-ui-adminlte
php artisan ui adminlte --auth
```

## Send mail using mailtrap

- [mailtrap](https://mailtrap.io/inboxes/2688502/messages)

```bash
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME==**************
MAIL_PASSWORD=**************
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

## Logout

```php
    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        if ($response = $this->loggedOut($request)) {
            return $response;
        }
        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/projects');
    }
```

## Middleware

- **route/Web.php**
```php
Route::resource('tasks', TaskController::class)->middleware('verified');
Auth::routes(['verify' => true]);
```

- **Model/User.php**
```php
    namespace App\Models;
    use Illuminate\Contracts\Auth\MustVerifyEmail;

    class User extends Authenticatable implements MustVerifyEmail
    {
        ...
    }
```
