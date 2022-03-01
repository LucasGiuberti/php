<?php
//Elementos de formulário com vários valores
print <<<_HTML_
<form method="POST" action="eat.php">
<select name="lunch[]" multiple>
<option value="pork">BBQ Pork Bun</option>
<option value="chicken">Chicken Bun</option>
<option value="lotus">Bean Paste Bun</option>
<option value="bean">Bean Paste Bun</option>
<option value="nest">Bird-Nest-Bun</option>
</select>
<input type="submit" name="submit">
</form> 

_HTML_;