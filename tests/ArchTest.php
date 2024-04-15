<?php

declare(strict_types=1);

arch('strict types')
    ->expect('App')
    ->toUseStrictTypes();

arch('functions')
    ->expect(['dd', 'dump', 'die', 'var_dump'])
    ->not->toBeUsed();

arch('helpers')
    ->expect(['session', 'auth', 'request'])
    ->toOnlyBeUsedIn([
        'App\Http',
        'App\Livewire',
        'App\Providers\AppServiceProvider',
        'App\Dashboard\Navigation',
    ]);

arch('commands')
    ->expect('App\Console\Commands')
    ->toExtend('Illuminate\Console\Command')
    ->toHaveMethod('handle');

arch('contracts')
    ->expect('App\Contracts')
    ->toBeInterfaces();

arch('controllers')
    ->expect('App\Http\Controllers')
    ->toHaveSuffix('Controller')
    ->ignoring('App\Http\Controllers\Auth\Requests');

arch('middleware')
    ->expect('App\Http\Middleware')
    ->toHaveMethod('handle');

arch('jobs')
    ->expect('App\Jobs')
    ->toHaveMethod('handle')
    ->toImplement('Illuminate\Contracts\Queue\ShouldQueue');

arch('livewire components')
    ->expect('App\Livewire')
    ->toExtend('Livewire\Component')
    ->toBeFinal();

arch('mailables')
    ->expect('App\Mail')
    ->toExtend('Illuminate\Mail\Mailable');

arch('models')
    ->expect('App\Models')
    ->toHaveMethod('casts')
    ->toExtend('Illuminate\Database\Eloquent\Model')
    ->toBeFinal();

arch('notifications')
    ->expect('App\Notifications')
    ->toExtend('Illuminate\Notifications\Notification');

arch('providers')
    ->expect('App\Providers')
    ->toExtend('Illuminate\Support\ServiceProvider');

arch('rules')
    ->expect('App\Rules')
    ->toImplement('Illuminate\Contracts\Validation\ValidationRule');

arch('parsable content providers')
    ->expect('App\Services\ParsableContentProviders')
    ->toImplement('App\Contracts\ParsableContentProvider');

arch('view components')
    ->expect('App\View\Components')
    ->toExtend('Illuminate\View\Component')
    ->toHaveMethod('render');

// TODO: Make controllers not extend anything
arch('avoid inheritance')
    ->expect('App')
    ->classes()
    ->toExtendNothing()
    ->ignoring([
        'App\Console\Commands',
        'App\Exceptions',
        'App\Events',
        'App\Http\Controllers\Auth\Requests',
        'App\Http\Requests',
        'App\Http\Controllers', // Doing this temporarily to avoid breaking the tests
        'App\Jobs',
        'App\Livewire',
        'App\Mail',
        'App\Models',
        'App\Notifications',
        'App\Providers',
        'App\View',
    ]);

arch('ensure factories', function () {
    foreach (getModels() as $model) {
        expect($model::factory())
            ->toBeInstanceOf(Illuminate\Database\Eloquent\Factories\Factory::class);
    }
});

/**
 * Get all models in the app/Models directory.
 *
 * @return array<int, class-string<\Illuminate\Database\Eloquent\Model>>
 */
function getModels(): array
{
    return collect(glob(__DIR__.'/../app/Models/*.php'))
        ->map(function ($file) {
            return 'App\Models\\'.basename($file, '.php');
        })->toArray();
}
