<?php
 $dir = 'myDir';

 // create new directory with 744 permissions if it does not exist yet
 // owner will be the user/group the PHP script is run under
 if ( !file_exists($dir) ) {
     mkdir ($dir, 0744);
 }

 file_put_contents ($dir.'/test.txt', 'Hello File');