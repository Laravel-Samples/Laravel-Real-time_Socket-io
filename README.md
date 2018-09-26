# Laravel 5.7 - Public Real-Time Notifications with Pusher

This app works along with [Pusher], [Laravel Events], [Laravel Channels], [Laravel Form Requests], [Laravel Middleware], [Laravel Echo] and [Vue.js]

In addition to the repository [jamesmallon/Laravel-RealTime_Public_Notifications], this app includes a customized User Registration. 

### Home page real-time message updating:

Under the Home page title lays a quotation, this text box can be updated in real time by registered users. Open two browser windows and see the message sent in the dashboard changing in real time the Home page message.

### The customization of the User Registration includes:

- replacing the 'name' property, column, validation and everything associate with this data to 'username'
- adding a Request Class (RegistrationRequest) to deal with the form fields validation and error message customization
- adding a get route to the logout
- segregating layout and public files in 'front' and 'dashboard'

Install composer dependencies:
```
$ composer install
```

Instal npm dependencies and run the mix tasks:
```
$ npm install && npm run dev
```

On your .env file put your Pusher credentials:
```
BROADCAST_DRIVER=pusher

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=
```

License
----

MIT

**by [Thiago Mallon]**

 [Pusher]: <https://pusher.com/>
 [Vue.js]: <https://vuejs.org/>
 [Laravel Events]: <https://laravel.com/docs/5.7/events>
 [Laravel Channels]: <https://laravel.com/docs/5.7/broadcasting#defining-channel-classes>
 [Laravel Form Requests]: <https://laravel.com/docs/5.7/validation#creating-form-requests>
 [Laravel Middleware]: <https://laravel.com/docs/5.7/middleware>
 [Laravel Echo]: <https://laravel.com/docs/5.7/broadcasting#installing-laravel-echo>
 [pusher/pusher-php-server]: <https://packagist.org/packages/pusher/pusher-php-server>
 [laravel-echo]: <https://www.npmjs.com/package/laravel-echo>
 [pusher-js]: <https://www.npmjs.com/package/pusher-js>
 [Thiago Mallon]: <https://www.linkedin.com/in/thiago-mallon/>
 [jamesmallon/Laravel-RealTime_Public_Notifications]: <https://github.com/jamesmallon/Laravel-RealTime_Public_Notifications>
