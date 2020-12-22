module.exports = {
  "extends": "stylelint-config-standard",
  "plugins": ["stylelint-scss"],
  "rules": {
    "at-rule-no-unknown": null,
    "scss/at-rule-no-unknown": true,
		"no-descending-specificity": null,
		"indentation": "tab",
    "number-leading-zero": null,
    "unit-allowed-list": ["em", "rem", "%", "px" , "fr", "vh", "s" ,"vw"]
  },
}
