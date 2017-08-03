<?php

$created_at = date("Y-m-d H:i:️s", time());

if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['created_at'])) {

}

?>
<form method="post" action="index.php">
    <label for="name">name:</label>
    <input type="text" name="name" placeholder="name">
    <label for="description">description</label>
    <input type="text" name="description" placeholder="desciption">
    <label for="created_at">created_at</label>
    <input type="text" name="created_at" placeholder="created_at" value="<?php echo $created_at ?>">
    <div >
        <input type="submit" class="btn btn-info" >
    </div>
</form>
