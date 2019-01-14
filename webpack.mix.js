var mix = require('laravel-mix');
		mix.setPublicPath('.');

var spritemap = require('svg-spritemap-webpack-plugin');
var iconfont = require('iconfont-plugin-webpack');

// Autoload jQuery
// @see: https://github.com/JeffreyWay/laravel-mix/blob/master/docs/autoloading.md
// mix.autoload({
// 	jquery: ['$', 'window.jQuery']
// });

// Disable Process CSS Urls
// @see: https://laravel.com/docs/5.7/mix#working-with-stylesheets
mix.options({
	processCssUrls: false
});

// Shot
// @see: https://github.com/JeffreyWay/laravel-mix/issues/1086
// var argv = require('yargs').argv;
// var shot = null
// if(argv.env.shot !== undefined) {
// 	shot = argv.env.shot;
// }

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.js('typo3conf/ext/empire/Resources/Public/Js/empire.js', 'fileadmin/Resources/Public/Js/empire.js')
 	.sass('typo3conf/ext/empire/Resources/Public/Sass/empire.scss', 'fileadmin/Resources/Public/Css/empire.css')
	.sass('typo3conf/ext/empire/Resources/Public/Sass/editor.scss', 'fileadmin/Resources/Public/Css/editor.css')
	.webpackConfig({
		output: {
			publicPath: '/fileadmin/Resources/Public/'
		},

		plugins: [
			// new spritemap({
			// 	src: 'typo3conf/ext/empire/Resources/Public/Svg/Sprite/*.svg',
			// 	filename: 'fileadmin/Resources/Public/Svg/sprite.svg',
			// 	svgo: false
			// }),
			new iconfont({
				src: './typo3conf/ext/empire/Resources/Public/Svg/Font', // required - directory where your .svg files are located
				family: 'icons', // optional - the `font-family` name. if multiple iconfonts are generated, the dir names will be used.
				dest: {
					font: './fileadmin/Resources/Public/Font/[family].[type]', // required - paths of generated font files
					css: './typo3conf/ext/empire/Resources/Public/Sass/empire/_icons.scss' // required - paths of generated css files
				},
				watch: {
					pattern: './typo3conf/ext/empire/Resources/Public/Svg/Font/*.svg', // required - watch these files to reload
					cwd: undefined // optional - current working dir for watching
				},
			})
		]
	});