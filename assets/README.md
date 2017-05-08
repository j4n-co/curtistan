#Styleguide

run from this directory with:
$ sass --watch ./scss:./css && pug scss --basedir $(pwd)  --out styleguide
$ pug scss --out styleguide
$ serve

sass --watch ./scss:./css & pug --pretty --basedir '.' --watch ./scss/ --out ./styleguide/ & python -m SimpleHTTPServer 8000
