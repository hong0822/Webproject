<?php
    $files = file_get_contents('card.html');

    $files = str_replace('{Information}','Project',$files);

    $files = str_replace('{cardimage}','images.anyway.png',$files);
    
    $files = str_replace('{username}','Peter Wang',$files);

    $files = str_replace('{content}','welcome to my site....',$files);

    $files = str_replace('{siteurl}','https://php.onlinedoc.tw',$files);

    //print $files;
    file_put_contents('card1.html',$files);

?>

