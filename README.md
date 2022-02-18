# Apache PHP MySQL
Example of Compose App including Apache, PHP and MySQL.

### Getting Started

Create next files using `*.dist` examples.
- `api/.env`
- `db/root_password.txt`
- `db/password.txt`

Choose any passwords what you want.

Start containers:
```
docker-compose up -d
```
Connect to MySQL server and run `db/init.sql` file.

Open http://localhost:8080

You should get next message:
```
Connected to MySQL server successfully!

admin: password

Alice: 12345
```

To stop containers run:
```
docker-compose down
```
