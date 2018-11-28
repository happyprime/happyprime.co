# happyprime.co WordPress Theme

## Local setup

* `git clone`
* `npm install`
* `npm run build`

## Deployment

Deployment happens for every merge into the `master` branch.

Deployment runs `npm install` and `npm run bundle`, which builds a `happyprime` directory inside the theme with only the necessary files for production.

Deployment notifications are sent to Slack.