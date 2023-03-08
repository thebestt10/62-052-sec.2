<?php 
include "condb.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<table>
    <thead>
        <tr>#</tr>
        <tr>name</tr>
        <tr>last name</tr>
        <tr>edit</tr>
        <tr>delete</tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM NewTable ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['sname'] ?></td>
            <td><button class="btn_edit" data="<?= $row['id'] ?> ">edit</button></td>
            <td><button class="btn_delete" data="<?= $row['id'] ?> ">delete</button></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>


<script>
    $(".btn_delete").click(function(){
        alert($(this).attr('data'));
    });
</script>