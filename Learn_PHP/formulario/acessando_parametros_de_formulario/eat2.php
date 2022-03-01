<?php
//Acessando vários valores enviados
print <<<_HTML_
<form method="POST" action="eat2.php">
<select name="lunch[]" multiple>
<option value="pork">BBQ Pork Bun</option>
<option value="chicken">Chicken Bun</option>
<option value="lotus">Bean Paste Bun</option>
<option value="bean">Bean Paste Bun</option>
<option value="nest">Bird-Nest-Bun</option>
</select>
<input type="submit" name="submit">
</form> 
Selected buns:
<br/>
_HTML_;
if(isset($_POST['lunch'])){
    foreach ($_POST['lunch'] as $choise){
        print "You want a $choise bun. <br/>";
    }
}
