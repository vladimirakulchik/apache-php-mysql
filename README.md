# Apache PHP MySQL
Simple Compose App to show users data from the database. 
It contains Apache, PHP and MySQL.

### Preparation steps

Create next files using `*.dist` examples.
- `.env`
- `api/.env`

Choose any passwords for db users.
The DB_HOST is a name of the database service in `docker-compose.yaml` file.

### Start application
Start containers:
```
docker-compose up -d
```
You can use `--build` option to force rebuild images.
```
docker-compose up -d --build
```

Check application on http://localhost:8080

### Init database
Only in first time you should create tables and set data. After that it will be stored in volumes.

Connect to MySQL server (localhost:3306) and run `db/init.sql` file.

### Stop application
To stop containers run:
```
docker-compose down
```

### Install Xdebug
Connect to api service container and run `install_xdebug.sh` script.

```
docker exec -it apache-php-mysql_api_1 /bin/bash
cd /scripts
./install_xdebug.sh
```
You should get success message.
After that add server (localhost:8080) and set mapping (api -> /data/app) in the IDE.

### Remove Xdebug
Connect to api service container and run `uninstall_xdebug.sh` script.

```
docker exec -it apache-php-mysql_api_1 /bin/bash
cd /scripts
./uninstall_xdebug.sh
```
You should get success message.
