<?php
print <<<_HTML_
<form method="POST" action="catalog.php">
<input type="text" name"product_id">
<select name="category">
<option value="overmitt">Post Holder</option>
<option value="torch">Kitchen Torch</option>
</select>
<input type="submit" name="submit">
</form>
_HTML_;