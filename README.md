# Laravel 5.7 - Custom User Registration

This app works along with [Pusher], [Laravel Events], [Laravel Channels], [Laravel Form Requests], [Laravel Echo] and [Vue.js]

In addition to the repository [jamesmallon/Laravel-RealTime_Public_Notifications], this app includes a customized User Registration. 

### The customization of the User Registration includes:

- replacing the 'name' property, column, validation and everything associate with this data to 'username'
- adding a Request Class (RegistrationRequest) to deal with the form fields validation and error message customization
- adding a get route to the logout
- segregating layout and public files in 'front' and 'dashboard'

### Home page real-time message updating:

Under the title, in the home page lays a quotation: 
Genius is one percent inspiration and ninety-nine percent perspiration. - Thomas Edison

This message can be update in real time, it means that all browsers or tabs running the home page of this app will be updated in real time if a new message  is sent to:
```
/api/send-message/{your-message}
```


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
 [Laravel Echo]: <https://laravel.com/docs/5.7/broadcasting#installing-laravel-echo>
 [pusher/pusher-php-server]: <https://packagist.org/packages/pusher/pusher-php-server>
 [laravel-echo]: <https://www.npmjs.com/package/laravel-echo>
 [pusher-js]: <https://www.npmjs.com/package/pusher-js>
 [Thiago Mallon]: <https://www.linkedin.com/in/thiago-mallon/>
 [jamesmallon/Laravel-RealTime_Public_Notifications]: <https://github.com/jamesmallon/Laravel-RealTime_Public_Notifications>
