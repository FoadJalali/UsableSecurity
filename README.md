# UsableSecurity

To install the relevant package via composer run the following command to pull in the latest version:

  > composer require tymon/jwt-auth
 
 Run the following command to publish the package config file:
 
  > php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
  
 Now have a config/jwt.php file that allows you to configure the basics of this package.
 
 For generate key you must be following this command:
 
  > php artisan jwt:secret
 
This will update your .env file with something like JWT_SECRET=foobar
