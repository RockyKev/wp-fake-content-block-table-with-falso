# Fake Content Block

A table generating a API using [falso](https://ngneat.github.io/falso/docs/getting-started)


## Setup and Instructions

1. Add this plugin to your WordPress installation, turn it on, and add it to a WordPress Page.

It should look like this:

![](/readme-image-1.png)


2. Within the project, run `nvm i` & `npm i` in the command line to switch to a working node version and install dependencies.

3. Generate the fake payload

`npm run generate` - that will run `node fake-data/run-script.js`

It'll create a `fake-data/fake-payload.json` if it doesn't exist, or refresh it.

4. As a test, the file will then be dynamically imported into your WP block.

Inside `src/script.js`, you'll see a function called `getFakeData()`, which simulates a restAPI call to pull data from your fake payload.

![](/readme-image-2.png)



## Strongly Suggested Plugins


[Query Monitor](https://wordpress.org/plugins/query-monitor/) - This will allow you to debug errors in your devtools. To show log data, use `do_action( 'qm/debug', $variable_here );`. [Documentation](https://querymonitor.com/docs/logging-variables/)




