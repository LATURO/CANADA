<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Викторина</title>
</head>
<body>
<?php include('menu.html')?>
<script type="text/javascript" language="JavaScript" src="scripts.js"></script>
<center><b>На сколько хорошо ты знаешь Канаду?</b></center><br/><br/>
&nbsp;&nbsp;&nbsp;<span style="color:#006699;text-decoration:underline;cursor:pointer;" onclick="document.getElementById('instruction').style.display = showhide(document.getElementById('instruction').style.display)">
Инструкция</span>
 <br/>
<div id="instruction" style="display: none; width: 100%;">
<ul>
<li>Выберите один из вариантов в каждом из 4 вопросов;</li>
<li>Нажмите на кнопку "Показать результат";</li>
<li>Скрипт не покажет результат, пока Вы не ответите на все вопросы;</li>
<li>Загляните в окно рядом с номером задания. Если ответ правильный, то там (+). Если Вы ошиблись, там (-).</li>
<li>За каждый правильный ответ начисляется 1 балл;</li>
<li>Оценки: менее 2 баллов - НЕУДОВЛЕТВОРИТЕЛЬНО, от 2 но менее 3 - УДОВЛЕТВОРИТЕЛЬНО, 3 и менее 4 - ХОРОШО, 4 - ОТЛИЧНО;</li>
<li>Чтобы сбросить результат тестирования, нажать кнопку "Сбросить ответы";</li>
</ul>
</div>
<form name="test"><ol>
<li><INPUT type="text" size="1" value="" name="T1"/><b> В каком году основана Канада?</b><br/>
<input type="radio" value="0" name="Q1"/> 1333<br />
<input type="radio" value="1" name="Q1"/> 1534<br />
<input type="radio" value="2" name="Q1"/> 3311<br />
<br/></li><li><INPUT type="text" size="1" value="" name="T2"/><b> Столица Канады-?</b><br/>
<input type="radio" value="0" name="Q2"/> Торонто <br />
<input type="radio" value="1" name="Q2"/> Монреаль<br />
<input type="radio" value="2" name="Q2"/> Москва<br />
<br/></li><li><INPUT type="text" size="1" value="" name="T3"/><b> Какое животное является символом Канады?</b><br/>
<input type="radio" value="0" name="Q3"/> Медведь<br />
<input type="radio" value="1" name="Q3"/> Олень<br />
<input type="radio" value="2" name="Q3"/> Бобр<br />
<br/></li><li><INPUT type="text" size="1" value="" name="T4"/><b> В каком веке Канада получила независимость от Британской Империи?</b><br/>
<input type="radio" value="0" name="Q4"/> 17<br />
<input type="radio" value="1" name="Q4"/> 18<br />
<input type="radio" value="2" name="Q4"/> 19<br />
<br/></li></ol>      
<CENTER>
<P><TEXTAREA name="s1" rows="4" cols="70" readonly> </TEXTAREA> </P>
<INPUT onclick="check_me()" type="button" value="Показать результат"/>&nbsp;&nbsp;&nbsp;&nbsp; 
<INPUT type="reset" value="Сбросить ответы"/> 
</CENTER>        
</form> 
<!-- Test created by service http://test.fromgomel.com --></body>
</html>