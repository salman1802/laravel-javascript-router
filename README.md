# Laravel JavaScript Router Package

This Laravel package provides a Blade view to include JavaScript router functionality based on Laravel routes.

## Installation

1. **Install the package via Composer:**

    ```bash
    composer require iroid/laravel-javascript-router
    ```

2. **Publish the package assets (if needed):**

    ```bash
    php artisan vendor:publish --provider="Iroid\javascript-router\javascript-routerServiceProvider"
    ```
3. **Add Service Proivder:**
   
   Add Service Provider In config/App.php
  
    ```
    'providers' => [
        Iroid\javascript-router\javascript-routerServiceProvider::class,
    ]

    ```


## Usage

1. **Include the Blade view in your layout or specific Blade file:**

    In your main layout file (e.g., `resources/views/layouts/app.blade.php`), add the following line where you want the JavaScript to be included:

    ```blade
    @include('javascript-router::javascript-router')
    ```

2. **Call the JavaScript function in your scripts:**

    You can now use the `getRouteUrl` function in your JavaScript code:

    ```javascript
    let url = getRouteUrl('user.profile', [1]);
     // Outputs: https://iroid-solutions.com/user/profile/1
    ```

## License

This package is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
