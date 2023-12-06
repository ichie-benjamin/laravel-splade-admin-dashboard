import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";
const colors = require('tailwindcss/colors')


/* @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/protonemedia/laravel-splade/lib/**/*.vue",
        "./vendor/protonemedia/laravel-splade/resources/views/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
        // "./app/Forms/*.php",
        // "./app/Tables/*.php",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('flowbite/plugin')
    ],
};
