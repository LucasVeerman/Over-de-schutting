<form action="./model/update.php" method="post">
<table>
       <tr>
            <td><input type="text" class="textField" placeholder="id" name="id" value="{$result.0.id}" readonly></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="name" name="name" value="{$result.0.name}" required></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="text" name="text" value="{$result.0.text}" required></td>
        </tr>
       
        <tr>
            <td><input type="submit" id="submit" name="submit_update" value="Submit"></td>
        </tr>
       
</table>
<a href="cms.php">Keer terug</a>
    
</form>