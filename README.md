

## Service users

endpoint /api/users accept "firstName", "lastName" and "email" as body payload with request type POST.
When user request to this endpoint, data will be stored in log file, after data stored UserRegistered event will be call
and it will pass the data to their listener class i.e SaveUserDataListener where data is get logged.

## Docker

I have created two files i.e Docker and docker-compose.yml that will make the app dockerize by running these commands.
> docker-compose build
> docker-compose up -d


## Unit test

The endpoint i.e /api/users is tested by phpUnit by running below command.
> php artisan test --filter UserApiTest
Screenshorts of API response and unit test is also provided in root directory. 
