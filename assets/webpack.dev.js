const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const extractSCSS = new ExtractTextPlugin('css/[name].css');



module.exports = {

  entry: {
    index: './scripts/src/index.js',
  },

  devtool: 'cheap-module-source-map',

  output: {
    path: path.resolve(__dirname, 'scripts/dist'),
    filename: '[name].dev.bundle.js',
    sourceMapFilename: '[name].dev.map'
  },

  plugins: [
    new HtmlWebpackPlugin({
        template : './scss/index.pug',
        inject   : true
    }),
    extractSCSS
  ],

  module: {
    rules: [
      {
        test: /\.js$/,
        include: [/scripts/],
        use: [{
          loader: 'babel-loader',
          options: { presets: ['es2015'] },
        }],
      },

      {
        test: /\.css$/,
        use: ['css-loader'],
      },

      {
        test: /\.scss$/,
        use: extractSCSS.extract({
          fallback: 'style-loader',
          use: ['css-loader',
                'sass-loader',
         ]})
      },

      {
        test: /\.pug$/,
        use: [
           'pug-loader',
        ]
      }
    ],
  },

  devServer: {
    port: 8000,
    host: 'localhost',
    historyApiFallback: true,
    noInfo: false,
    stats: 'minimal',
    contentBase: path.resolve(__dirname, './'),
  }

}