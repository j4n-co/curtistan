import resolve from 'rollup-plugin-node-resolve';
import babel from 'rollup-plugin-babel';
import commonjs from 'rollup-plugin-commonjs';

export default {
  entry: './scripts/src/index.js',
  format: 'iife',
  sourceMap: true,
  plugins: [
    resolve({
            jsnext: true,  // Default: false
            main: true,  // Default: true
        }),
    babel({
      exclude: 'node_modules/**' // only transpile our source code
    }),
            commonjs({
            namedExports: {
                'node_modules/jquery/dist/jquery.min.js': [ 'jquery' ]
            }
	})
],
dest: './scripts/dist/index.js'
};