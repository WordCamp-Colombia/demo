#!/bin/sh -l

rm .gitignore &> /dev/null
echo -e "/*\n!wp-content/" > ./.gitignore
echo "!.cpanel.yml" >> ./.gitignore

mkdir -p wp-content
cp -rp app/themes wp-content
cp app/.cpanel.yml .
rm .env.example
rm README.md
rm composer.json
rm index.php
rm wp-config.php
rm wpdeploy.sh
rm -rf app
rm -rf config
rm -rf .github
rm -rf .git
cd wp-content/themes/wcco
rm yarn.json
yarn cache clean
yarn
yarn build
rm .gitignore
rm package.json
rm webpack.config.js
rm yarn.lock
rm -rf node_modules
rm -rf assets
rm -rf webpack