1. yarn install
2. sass:watch

## In order to use `gulp deploy`
1. Rename `sample.conf.json` to `conf.json`
2. Fill in the ftp connection details
3. Run `gulp deploy:test` to test the connection - if the output includes file names that means that the files on the server exist locally also.bitcoin-legend
4. Run `gulp deploy`
