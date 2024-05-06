#!/bin/bash

# Check that Composer, PHP, Node, and NPM are installed
if [ ! -f /usr/local/bin/composer ]; then
    echo "Composer is not installed. Please install it and try again."
    exit 1
fi

if [ ! -f /usr/local/bin/php ]; then
    echo "PHP is not installed. Please install it and try again."
    exit 1
fi

if [ ! -f /usr/local/bin/node ]; then
    echo "Node is not installed. Please install it and try again."
    exit 1
fi

if [ ! -f /usr/local/bin/npm ]; then
    echo "NPM is not installed. Please install it and try again."
    exit 1
fi

# Install dependencies
composer install
composer update # Is ran after composer install to ensure that the latest versions of the dependencies are installed
npm install
npm update # Is ran after npm install to ensure that the latest versions of the dependencies are installed

# Copy the .env.example file to .env
cp .env.example .env

# Generate an application key
php artisan key:generate

# Ask the user what the name of the application is
echo "What is the name of your application? (Only use letters, numbers, and spaces, no quotes)"

# Read the user's input
read appName

# If it's empty, set it to "Laravel"

# Replace the APP_NAME variable in the .env file with the user's input
# By default the .env.example has APP_NAME="Eli's Laravel Starter"
if [ -z "$appName" ]; then
    sed -i '' 's/APP_NAME="Eli'\''s Laravel Starter"/APP_NAME="Laravel"/g' .env
else
    sed -i '' 's/APP_NAME="Eli'\''s Laravel Starter"/APP_NAME="'$appName'"/g' .env
fi

echo "Deleting the setup.sh file..."
rm setup.sh

echo "Setup complete! You can now run 'php artisan serve' to start the application."
