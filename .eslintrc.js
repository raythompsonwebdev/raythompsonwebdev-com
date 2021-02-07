module.exports = {
	env: {
		browser: true,
		es6: true,
		commonjs: true,
		jquery: {
			globals: {
				$: false,
			},
		},
	},
	extends: [
		'eslint:recommended',
		'plugin:@wordpress/eslint-plugin/esnext',
		'plugin:jquery/deprecated',
	],
	globals: {
		document: 'readonly',
		navigator: 'readonly',
		window: 'readonly',
		Atomics: 'readonly',
		SharedArrayBuffer: 'readonly',
	},
	parserOptions: {
		ecmaFeatures: {
			jsx: true,
		},
		ecmaVersion: 2019,
		sourceType: 'module',
	},
	plugins: ['react', 'jquery'],
	rules: {},
};
