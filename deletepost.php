<?php
        $con = mysql_connect("localhost","root","");
        mysql_select_db("guestbook",$con);

        $result = mysql_query ("select password from guestbook where num = $num", $con);
        $delpass = mysql_result($result,0,"password");

        if ($delpass != $pass) {
                echo ("
                        <script>
                                window.alert("비밀번호가 틀려요!!")
                        </script>
                ");
                }

                else {
                        $delete = mysql_query("delete from guestbook where num = $num",$con);
                }

        mysql_close($con);
?>