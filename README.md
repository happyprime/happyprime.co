# happyprime.co WordPress Theme

## Local setup

* `git clone`
* `npm install`
* `npm run fix-css` to run stylelint on styles in the `css/` directory.
* `npm run build-css` to build the main `style.css` file for the theme.

## Deployment

Deployment happens for every merge into the `master` branch.

Deployment runs `npm install` and `npm run build-css`, which creates the theme's `style.css` from the files in the `css/` directory. It then syncs the theme files with the server.

Deployment notifications are sent to Slack.
