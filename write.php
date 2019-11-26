<html>
<head>
<title>방명록 만들기</title>

<script language="Javascript">
function send(form) {
         if (form.name.value=="") {
             alert("이름을 입력해야죠??");
             document.test.name.focus();
             return;
         }

         if (form.memo.value=="") {
             alert("글을 입력하세요!!");
             document.test.memo.focus();
             return;
         }

         if (form.pass.value=="") {
             alert("비밀번호가 빠졌네요!!");
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
<p align=center><H2>방명록 만들기</H2></p>

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
<input type=button value=\"전송하기\" onclick=send(this.form)></td></tr></table>
</form>
</td></tr></table>
</td></tr></table>
</body>
</html>
");
?>