FROM lordrhodos/slim-docker:latest

COPY . /var/www/app
RUN rm .gitignore -Rf composer.json composer.lock docker-compose.yml Dockerfile apache.conf README.md
