# Laravel on Heroku

Laravel with best practices for deployment on Heroku. [Our articles on Medium](https://medium.com/@AutoIdle)

# Works out of the box

## Features

* `Heroku Postgres` (for Database)
* `Heroku Redis` (for Cache, Queue and Session) 
* Migrate Database automatically on deploy
* Logging
* With Scheduler

## Deploy to Heroku

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/autoidle/laravel-heroku)

![Create New App - Heroku](https://raw.githubusercontent.com/autoidle/laravel-heroku/master/doc/heroku.png)


## Setup locally and deploy to Heroku

### 1. Install Heroku CLI

https://devcenter.heroku.com/articles/heroku-cli

### 2. Create a new project 

```
composer create-project autoidle/laravel-heroku:dev-master my-laravel-heroku
```

### 3. Tracking your app in Git

```
cd my-laravel-heroku
git init
git add .
git commit -m 'Fresh Laravel installation'
```

### 4. Add Heroku app

```
heroku create my-laravel-heroku --region eu --addons=heroku-postgresql:hobby-dev,heroku-redis:hobby-dev
```

### 5. Set ENV variables

```
heroku config:set APP_DEBUG=true LOG_CHANNEL=errorlog
heroku config:set APP_KEY=$(php artisan --no-ansi key:generate --show)
```

### 6. Push your code to laravel

```
git push heroku master
```

### 7. Checkout your Laravel installation on Heroku

```
heroku open
```

### 8. Checkout the log (Optional)

```
heroku logs -t
```

## Extend with Laravel Auth (Optional)

### 1. Laravel provides a quick way to scaffold all of the routes and views you need for authentication using one simple command:

```
php artisan make:auth
```

### 2. Add changes to Git

```
git add .
git commit -m 'Add Laravel Auth'
```

### 3. Deploy to Heroku

```
git push heroku master
```

### 4. Checkout your Laravel installation on Heroku with Auth

```
heroku open
```


![Laravel with Auth on Heroku (Registration)](https://raw.githubusercontent.com/autoidle/laravel-heroku/master/doc/register.png)

![Laravel with Auth on Heroku (Logged in)](https://raw.githubusercontent.com/autoidle/laravel-heroku/master/doc/home.png)

---

[Code difference between Laravel and Laravel on Heroku](https://github.com/autoidle/laravel-heroku/compare/84ce504...master)

---

We are building a Heroku Add-on that helps you save money by automatically putting your non-critical apps to sleep after a period of inactivity.

[AutoIdle on the Heroku Marketplace](https://elements.heroku.com/addons/autoidle)
