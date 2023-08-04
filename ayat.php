<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ayat</title>
</head>
<body>
    
    <form action="ayatprocess.php" method="post" id="p1">
        <label for="aya" action="form_group"  id="aya"> user_id: </label>
        <?php
        for($x=1;$x>1000;$x++){
        ?>
        <select name="user id:" id="select 1">
        <option disabled selected> select_from </option>
    </select>
       <?php }?>
        <label for="ayat :" action="form_group"  id="p2"> aya range</label>
        <select name="aya range :" id="select 2">
        <option disabled selected> select from </option>
        <option value="per aya"> per aya</option>
        <option value="per two aya">per two aya </option>
        <option value="per page"> per page</option>
        <option value="per guz"> per guz</option>
</select>
        <br><br>
        <label for="start_date" action="from_group" id="p4">start_date:</label>
        <input type="date" name="start_date:" id="p1">
        <br>
        <label for="submit" action="form_group" id="p5"></label>
        <input type="submit" value="save">
    </form>
    <table border=2>
       <tr>
            <td>id</td>
            <td>start_aya</td>
            <td>end_aya</td>
            <td>user_id</td>
            <td>date</td>
        </tr>
    </table>
</body>

</html>