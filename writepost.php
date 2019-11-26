<?php
        $con = mysql_connect("localhost","root","");
        mysql_select_db("guestbook",$con);
       
        $result = mysql_query("select num from guestbook order by num desc",$con);
        $total = mysql_num_rows($result);

        if (!$total) {
                $num =1;
        }

        else {
            $max = mysql_result($result,0,"num");
            $num = $max + 1;
        }

    $date_time = date("y-m-d");
        $ip = getenv('REMOTE_ADDR');
        $memo = htmlspecialchars($memo);

        $insert = mysql_query("insert into guestbook(num,name,email,hp,memo,ip,date_time,visit,pass) values($num,'$name','$email','$hp','$memo','$ip','$date_time',0,'$pass')",$con);

        echo "<meta http-equiv='Refresh' content='0; URL=guestbook.php?&page=1'>";
               
    exit;

        mysql_close($con);
?>