1. Use `gulp sass` to compile sass into css without affecting the rest of the source files
1. Use `gulp build` to build the website files into a `dist` directory, ready for uploading to any web server
2. Use `gulp deploy` to deploy the `dist` directory to a web server, the details for which can be included as described below
3. Use `gulp build:deploy` to run the last two tasks, `gulp build` and `gulp deploy` all in one go

## In order to use `gulp deploy`
1. Rename `sample.conf.json` to `conf.json`
2. Fill in the ftp connection details
3. Run `gulp deploy:test` to test the connection - if the output includes file names that means that the files on the server exist locally also
4. Run `gulp deploy`
