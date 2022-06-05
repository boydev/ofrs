Symfony Demo Application
========================


Requirements
------------

  * Git;
  * Docker;
  * Docker-compose.

Installation
------------

1. Clone repo:
```bash
$ git clone git@github.com:boydev/ofrs.git
```

Alternatively, you can extract the archive.

2. Go inside project directory and run docker-compose:
```bash
$ docker-compose up -d
```

3. Install Symfony and its dependencies:
```bash
$ docker exec -it symfony composer install
```

4. Install JS package manager:
```bash
$ docker exec -it symfony yarn install
```

5. Execute migrations:
```bash
$ docker exec -it symfony bin/console doctrine:migrations:migrate
```

6. Go to myAdmin at [http://localhost:8002]() and import dump.sql from project. 


7. Compile FE assets:
```bash
$ docker exec -it symfony yarn watch
```


Usage
-----

Available pages:

http://localhost:8001/song

http://localhost:8001/artist


Tests
-----

TBD (soon! )



Well known issues
-----------------

- bug: not removing genre tags;
- todo: tests;
- improvement: use docker secrets;
- improvement: style and appearance;
- improvement: add fixtures to avoid importing DB step;
- todo: add csfixer and mess detector.



