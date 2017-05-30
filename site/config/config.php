<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

c::set('imageset.license', 'IMGST1-4f719777a99e8a4934d52d70b5326be9');
c::set('imagekit.license', 'IMGKT1-9eed4e7d212e9bb4eb4d1af500b63500');

c::set('imagekit.optimize', true);
c::set('imagekit.gifsicle.bin', '~/bin/gifsicle-1.88/src/gifsicle');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('debug',true);

// link custom CSS to panel
// TODO: make a seperate webpack build for this.
c::set('panel.stylesheet', 'assets/css/panel.css');