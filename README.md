# Laravel 5.7 - Public Real-Time Notifications with Socket.io and Redis 

This app works along with [Socket.io], [Redis], [Predis], [Laravel Events], [Laravel Channels], [Laravel Form Requests], [Laravel Middleware], [Laravel Echo], [AdminLTE] and [Vue.js]

In addition to the repository [Laravel-RealTime_Notifications_Pusher], this app includes a customized User Registration. 

### Home page real-time message updating:

Under the Home page title lays a quotation, this text box can be updated in real time by logged users. All new messages are saved to the database and by default the system print the last massage added, if none, it gets a Laravel Inspire quote.

### How it works:

To change the home page message you'll need to register and login in the app - write new messages in the dashboard and in other browser tab you'll be able to see the home page message being updated in real time. 

### The customization of the User Registration includes:

- replacing the 'name' property, column, validation and everything associate with this data to 'username'
- adding a Request Class (RegistrationRequest) to deal with the form fields validation and error message customization
- adding a get route to the logout
- segregating layout and public files in 'front' and 'dashboard'

### Installation

**You will need the Redis installed and running in your environemnt;**

Install the [Laravel Echo Server] globally:
```
npm install -g laravel-echo-server;

```
Rename the [Laravel Echo Server] configurations file and, and check the config values.
The file contains the minimal configuration and is ready to run with the php artisan serve
command.

```
$ mv laravel-echo-server.json.example laravel-echo-server.json 
```

Composer dependencies:
```
$ composer install
```

npm dependencies and run the mix tasks:
```
$ npm install && npm run dev
```

On your .env file replace fill with your environment data:
```
BROADCAST_DRIVER=redis

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null # if you have configured a password 
REDIS_PORT=6379

DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
### Running the application

Your Redis instance have to be working and for the real time messaging it is necessary 
to run the [laravel-echo-server]

```
$ laravel-echo-server start
```

License
----

MIT

**by [Thiago Mallon]**

 [Socket.io]: <https://socket.io/>
 [AdminLTE]: <https://adminlte.io/>
 [Vue.js]: <https://vuejs.org/>
 [Redis]: <https://redis.io/>
 [Predis]: <https://github.com/nrk/predis>
 [Laravel Events]: <https://laravel.com/docs/5.7/events>
 [Laravel Channels]: <https://laravel.com/docs/5.7/broadcasting#defining-channel-classes>
 [Laravel Form Requests]: <https://laravel.com/docs/5.7/validation#creating-form-requests>
 [Laravel Middleware]: <https://laravel.com/docs/5.7/middleware>
 [Laravel Echo]: <https://laravel.com/docs/5.7/broadcasting#installing-laravel-echo>
 [laravel-echo]: <https://www.npmjs.com/package/laravel-echo>
 [laravel-echo-server]: <https://www.npmjs.com/package/laravel-echo-server>
 [Thiago Mallon]: <https://www.linkedin.com/in/thiago-mallon/>
 [Laravel-RealTime_Notifications_Pusher]: <https://github.com/jamesmallon/Laravel-RealTime_Notifications_Pusher>
