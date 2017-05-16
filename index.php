<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js""></script>
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Умный шкаф</title>
</head>
<script type="text/javascript">

$(document).ready(function()
{

    var counter = 2;

    $("#addButton").click(function () {

	if(counter>10){
            alert("Only 10 textboxes allow");
            return false;
	}

	var newTextBoxDiv = $(document.createElement('div'))
	     .attr("id", 'TextBoxDiv' + counter);

	newTextBoxDiv.after().html('<label>'+ counter + ' : </label>' +
	      '<input type="text" name="textbox' + counter +
	      '" id="textbox' + counter + '" value="" >');

	newTextBoxDiv.appendTo("#TextBoxesGroup");


	counter++;
     });

     $("#removeButton").click(function () {
	if(counter==1){
          alert("No more textbox to remove");
          return false;
       }

	counter--;

        $("#TextBoxDiv" + counter).remove();

     });

     $("#getButtonValue").click(function () {

	var msg = '';
	for(i=1; i<counter; i++){
   	  msg += "\n" + i + " : " + $('#textbox' + i).val();
	}
    	  alert(msg);
     });
  });
</script>
<body>
<header>
	<div id ="logo">
	 <a href="/D:/SCK/index.php" title="Перейти на главную"> <span>У</span>мный <span>Ш</span>каф </a>
	</div>

	<div id= "menuHead">
		<a href="about.php">
			<div style="margin-right: 5%">О нас</div> 
		</a>
		<a href="feedback.php">
			<div>Обратная связь</div>
		</a>
	</div>
	
	<div id= "regAuth">
		<a href ="regAuth.php">Регистрация</a>|<a href="auth.php">Авторизация
		</a>
	</div>
	</header>

<div id='TextBoxesGroup'>
	<div id="TextBoxDiv1">
		<label>1: </label><input type='textbox' id='textbox1' >
	</div>
</div>
<input type='button' value='Добавить' id='addButton'>
<input type='button' value='Удалить ' id='removeButton'>


<footer>
	<div id = "social">
	</div>
	<div id = rights>
Все права защищены &copy; <?=date ('Y')?>
	</div>
</footer>

</body>
</html>