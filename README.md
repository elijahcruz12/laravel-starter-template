# Eli's Laravel Template

This is a template for Laravel projects. It includes a few things that I find myself doing in every project, so I've included them here to save time.

My hope is that this template will make it easier for me to start new projects. I will be updating this template as I find new things to add.

## Installs

- Laravel
- Livewire
- Alpine.js
- Tailwind CSS
- TallStackUI
- BunnyCDN Storage Support (With pull zone, Storage is defaulted to Los Angeles zone)

This uses `@livewireScriptConfig`, and sets up livewire and alpine in `app.js`. It also creates a `layouts/app.blade.php` file that includes the necessary scripts and styles for livewire and alpine.

This will always be a work in progress, and I will be updating it as I find new things to add.

## Usage

## Automatic Method

Run the `setup.sh` script in the root of the project. This will install all the necessary dependencies and set up the project for you.

```bash
./setup.sh
```

### Manual Method

1. Clone this repository (I recommend clicking on the "Use this template" button on GitHub to create a new repository with this template)
2. Run `composer install`
3. Run `cp .env.example .env`
4. Run `php artisan key:generate`
5. Run `npm install`
6. Run `npm run dev`

# Composer scripts

The scripts below are only the ones you are expected to run. Generally most of the other scripts are either defaults from Laravel, or are ran automatically by the other scripts.

## `composer test`

This is the main test script. It runs the following commands:

- `pint --test` : Makes sure your pint linting is correct
- `rector --dry-run`: Makes sure your rector changes are correct
- `phpstan analyse`: Makes sure your PHPStan (`Larastan`) is correct
- `pest --type-coverage --min=100`: Makes sure you have 100% type coverage
- `pest --parallel --coverage --min=100`

## `composer lint`

Will run `pint` to check your code for linting errors and fix them.

## `composer refactor`

Will run `rector` to check your code for refactoring errors and fix them.

## `composer types`

Will run `phpstan` to check your code for type errors and fix them.

## `composer types:fix`

Will run `phpstan` to check your code for type errors and fix them, however it will use phpstan pro, which is a paid service. It opens a browser window to the phpstan pro website.


## Testing

This template includes a few commands in the `composer.json` file to help with testing. You can run these commands with `composer test`.

I have also included a few Architect tests in the `tests/ArchTest.php` file. These will run automatically when you run `composer test` or `./vendor/bin/pest`.

The test suite expects 100% test coverage, 100% type coverage, and 100% Larastan coverage. If you don't meet these requirements, the tests will fail. You can of course, modify these requirements in the `composer.json` file.

## Contributing

If you would like to contribute to this template, please feel free to open a pull request. I will review it as soon as I can. Note that not all pull requests will be accepted, but I will do my best to provide feedback on why a pull request was not accepted.

Generally if a pull request is not accepted, it is because it does not fit the goals of this template. However, I am always open to new ideas and trying new things, so please feel free to open a pull request.

## License

This template does not have a license, feel free to steal it and take credit for it. I don't mind. I hope it helps you in your projects. (LUL)
