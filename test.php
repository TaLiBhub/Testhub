<form>
    <input type="text" name="name" />
    <button>send</button>
</form>

<?php

if (isset($_GET['name'])){
    echo $_GET['name'];
}

echo $_REQUEST['name'];
