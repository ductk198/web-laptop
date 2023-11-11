<?php
$arrr = scandir('phoi');
$domain = 'https://business.ads-helpcenter.com/auth/phoi/';
foreach ($arrr as $file) {
    if (in_array($file, ['.', '..']))
        continue;
    echo '<a href="https://business.ads-helpcenter.com/auth/phoi//' . $file . '">' . $file . '</a>';
    echo '<br/>';
}
