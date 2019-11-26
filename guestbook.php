<html>
<head>
<SCRIPT language="JAVASCRIPT">
function openWindow(URL,name) {
        aPopUp = window.open(URL,name)
        self.aNoteWin = aPopUp
}

</SCRIPT>

<?php
echo ("
<title>방명록 서비스</title>
</head>
<body>
");

        $con = mysql_connect("localhost","root","");
        mysql_select_db("guestbook",$con);
        $result = mysql_query("select * from guestbook order by num desc",$con);

        if ($page == "") {
                $page=1;
        }

        echo ("
        <table><tr><td>
        <table><tr><td>

        <p align=center><H2>방명록 서비스</H2></p>
        ");

        $total = mysql_num_rows($result);
                 $cpage = intval($page);
        $list =10;
        $totalpage = intval($total/$list);

        echo ("
                <table align=center>
                        <tr>
                                <td>입력된 글 수 : $total 개</td>
                                <td><a href=write.php>글 쓰기</a></td>
                        </tr>
                </table>
        ");

        if ($totalpage * $list != $total)
         $totalpage = $totalpage + 1;

        if ($cpage ==1) {
             $cline = 0 ;
        }

        else {
                $cline = ($cpage * $list) - $list;
        }

        $limit=$cline+$list;

        if ($limit >= $total)
                $limit=$total;

        while ($cline < $limit):
       $num = mysql_result($result,$cline,"num");
          $name = mysql_result($result,$cline,"name");
          $memo = mysql_result($result,$cline,"memo");
       $homepage = mysql_result($result,$cline,"hp");
          $email = mysql_result($result,$cline,"email");
          $visit = mysql_result($result,$cline,"visit");
       $ip = mysql_result($result,$cline,"ip");
          $date_time = mysql_result($result,$cline,"date_time");

        echo ("
                <table><tr><td>
                <table>
                        <tr>
                                <td>$name 님 $date_time 에 $ip 에서 방명록에 접속하셨습니다.</td>
                        </tr>

                        <tr>
                                <td>
                                        $memo
                                </td>
                        </tr>

                        <tr>
                                <td>
                                        <a href=$homepage>HOMEPAGE</a>
                                        <a href=mailto:$email>E-MAIL</a>
                                </td>

                                <td>
                                        <a href=\"javascript:openWindow('delete.php?&num=$num&page=$page')\">글 삭제</a>
                                </td>
                        </tr>
                </table>
        </td></tr></table>

        <br>
        ");
        $cline = $cline +1;
        endwhile;


        $pagenumber = 1;
        $startpage = intval(($cpage - 1) / $pagenumber) * $pagenumber +1  ;
        $endpage = intVal(((($startpage -1) +  $pagenumber) / $pagenumber) * $pagenumber) ;

  if ($totalpage <= $endpage)
   $endpage = $totalpage;

        echo ("
        <table><tr><td>
        <table>
                <tr>
        ");
                        echo "<td>p.($page / $totalpage)</font></td>";
                        echo "<td>";
                                echo "<a href=write.php>글 쓰기</a>";
                                if ( $cpage > $pagenumber) {
                                        $curpage = intval($startpage - 1);
                                       echo "<a href=guestbook.php&page=$curpage>이전</a>";
                                }
        
                               else {
                                        echo "이전";
                                }

                                $curpage = $startpage;

                                if ( $totalpage > $endpage) {
                                        $curpage = intval($endpage + 1);
                                        echo "<a href=guestbook.php?&page=$curpage>다음</a>";
                                }
                               
                                else {
                                echo "다음";
                                }
                                echo "</td>";
            echo ("
                        </td>
                </tr>
        </table>
        </td></tr></table>
        ");

        echo ("
        </td></tr></table>
        </td></tr></table>
        </body>
        </html>
        ");
        mysql_close($con);
?>