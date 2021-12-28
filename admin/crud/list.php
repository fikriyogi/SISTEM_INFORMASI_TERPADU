<?php
if (! empty($row)) {
    foreach ($row as $k => $v) {
        ?>
<div class="box-container">
    <div class="title">
        <a href="<?php echo $row[$k]["url"]; ?>"><?php echo $row[$k]["title"]; ?></a>
    </div>
    <div class="description"><?php echo $row[$k]["description"]; ?>...</div>
    <div class="category"><?php echo $row[$k]["category"]; ?></div>
    <div class="action">
        <button class="btn-action bn-edit"
            id="<?php echo $row[$k]["id"]; ?>">Edit</button>
        <button class="btn-action bn-delete"
            id="<?php echo $row[$k]["id"]; ?>">Delete</button>
    </div>
</div>
<?php
    }
}
?>