var path = require('path');
const webpack = require('webpack');

module.exports = {

  entry: {
    index: './scripts/src/index.js',
  },

  devtool: 'cheap-module-source-map',

  output: {
    path: path.resolve(__dirname, 'scripts/dist'),
    filename: '[name].prod.bundle.js',
    sourceMapFilename: '[name].prod.map'
  },

  plugins: [
    new webpack.LoaderOptionsPlugin({
      minimize: true,
      debug: false
    }),
    new webpack.optimize.UglifyJsPlugin({
      beautify: false,
      mangle: {
        screw_ie8: true,
        keep_fnames: true
      },
      compress: {
        screw_ie8: true
      },
      comments: false
    })
  ]
}