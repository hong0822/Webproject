<?php
    //这是注解。以下进行php程式码输出内容
    print("Hello, World!"."\n");
    print("This is a first program!"."\n");
    print("Leborn James!"."\n");

    /*
    程式日期：以下程式列出今天日期
    程式日期：2021/03/12
    Author: Choong
    Version: 1.0
    */
    print time();
    
    // 變數 a 沒宣告就使用,會產生 E_NOTICE 的警告
    echo '$a: '.$a.'<be />';
    $name = 100;
    echo '$name: '.$name.'<be />';
    $name = 'David';
    echo '$name: '.$name.'<be />';
    $a = $a + 100;
    echo '$a: '.$a.'<be />';
?>