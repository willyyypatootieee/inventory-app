# Native PHP CRUD with Docker

Simple native PHP CRUD application using MySQL in Docker and a Material Bootstrap UI.

## Run

```bash
docker compose up -d --build
```

Open:

```text
http://localhost:8080
```

## Database

- Host from host machine: `localhost`
- Port from host machine: `3307`
- Database: `kampus_db`
- User: `kampus_user`
- Password: `kampus_pass`
- Root password: `root_pass`

## Stop

```bash
docker compose down
```

To remove database data too:

```bash
docker compose down -v
```
