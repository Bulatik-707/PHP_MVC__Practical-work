<!doctype html>
<head>
<title>Пр. 1-2 Задача 2 HEREDOC – синтаксис</title>
<meta charset="utf-8">
</head>
<body>
    <p> <a href='../index.php'> К содержанию </a> </p> <br>

    <?php 
        echo <<<HERE

        <table width="400" align="center" cellpading="10"
        bgcolor="#f6f6f6" style="border: 1px solid gray">
        <tr>
        <td valign="top"> <p>Счастье разными людьми понимается по разному...</p> </td>
        </tr>

        <tr>
        <td> <p>У самых счастливых людей НЕТ всего лучшег...
        Счастье в том, чтобы хотеть то, что у тебя ЕСТЬ. А не то, что хочешь...</p> </td>
        </tr>
        </table>
        HERE;
    ?>

</body>
</html>