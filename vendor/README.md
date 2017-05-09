This directory is reserved for Kirby plugins that requires files
to be placed in different directories. 

In this situation, you can't just git submodule and call it a day. 
You have to git submodule the dependancy in this directory, 
then create symlinks to the various places that the files need to live. 

