<html>
<head>
<title>���� �����</title>

<script language="Javascript">
function send(form) {
         if (form.name.value=="") {
             alert("�̸��� �Է��ؾ���??");
             document.test.name.focus();
             return;
         }

         if (form.memo.value=="") {
             alert("���� �Է��ϼ���!!");
             document.test.memo.focus();
             return;
         }

         if (form.pass.value=="") {
             alert("��й�ȣ�� �����׿�!!");
             document.test.pass.focus();
             return;
         }

         form.submit();
}
</script>
</head>

<?php

if ($page == "") $page=1;
echo ("

<body>
<table><tr><td>
<table><tr><td>
<p align=center><H2>���� �����</H2></p>

<form method=post action=writepost.php name=test>
<input type=hidden name=tbname value=guestbook>
<input type=hidden name=page value=$page>

<table align=center width=400><tr><td>
<table align=center width=400>
    <tr>
                <td>NAME</td>
                <td><input type=text size=15 maxlength=15 name=name></td>
    </tr>

    <tr>
                <td>E-Mail</td>
                <td><input type=text size=30 maxlength=30 name=email></td>
    </tr>

    <tr>
                <td>HOMEPAGE</td>
                <td><input type=text size=50 maxlength=50 name=hp value=http://></td>
    </tr>

    <tr>
                <td>MEMO</td>
                <td><textarea name=memo rows=5 cols=50></textarea></td>
    </tr>

    <tr>
                <td>PASSWORD</td>
                <td><input type=password size=8 maxlength=8 name=pass></td>
        </tr>
 </table>
</td></tr></table>

<br>

<table align=center>
<tr><td>
<input type=button value=\"�����ϱ�\" onclick=send(this.form)></td></tr></table>
</form>
</td></tr></table>
</td></tr></table>
</body>
</html>
");
?>