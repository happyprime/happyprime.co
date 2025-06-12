{
	"extends": "@wordpress/stylelint-config",
	"ignoreFiles": ["themes/happyprime/*.css"],
	"rules": {
		"declaration-property-unit-allowed-list": null,
		"max-line-length": null,
		"no-descending-specificity": null,
		"selector-class-pattern": [
			'^[a-z]([a-z0-9\-_]+)',
			{
				message: 'Selector should use lowercase and separate words with hyphens or underscores (selector-class-pattern)',
			},
		],
		"selector-id-pattern": [
			'^[a-z]([a-z0-9\-_]+)',
			{
				message: 'Selector should use lowercase and separate words with hyphens or underscores (selector-id-pattern)',
			},
		]
	}
}
