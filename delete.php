<?php
  $con = mysql_connect("localhost","root","");
  mysql_select_db("guestbook",$con);

  $result = mysql_query("select name from guestbook where num = $num",$con);
  $name = mysql_result($result,0,"$name");
?>

<html>
<head>
<title>���� ����</title>

<script language=Javascript>
function send(form) {
 if (form.password.value=="") {
        alert("��й�ȣ �Է�");
        document.test.password.focus();
        return;
}

 else {
       form.submit();

<?php
echo ("
       window.opener.location = \"guestbook.php?&page=$page\";
");
?>

  this.window.close();
 }
 return;
}

<?php
echo ("

</script>
</head>
<body>
<table><tr><td>
<table><tr><td>
<p align=center>���� ����</b></font></p>

<form method=post action=deletepost.php name=test>
<input type=hidden name=tbname value=$tbname>
<input type=hidden name=num value=$num>
<input type=hidden name=page value=$page>
<table align=center>
        <tr>
                <td>�����ϱ�</td>
        </tr>

        <tr>
                <td align=center>
     PASSWORD : <input type=password name=password size=8 maxlength=8>

     <input type=button value=���� onclick=send(this.form)>
    </td>
        </tr>

        <tr>
                <td>��й�ȣ �Է�</td>
        </tr>
</table>
</form>

</td></tr></table>
</td></tr></table>

</body>
</html>
");
mysql_close($con);
?>