<?php
$address = getenv("REMOTE_ADDR");
print "Your IP Address:{$address}<br>";
print 'Your host name:' . gethostbyaddr(getenv($address)) . '<br>';
print 'Your browser:' . getenv("HTTP_USER_AGENT");