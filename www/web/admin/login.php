<div style="margin-left:200px; margin-top:150px;">
<?php if(isset($_POST['login'])){
        $hash = sha1($_POST['pwd']);
        $user = mysql_query("SELECT user_name FROM wat_user WHERE user_name='".mysql_escape_string($login)."' AND user_pwd='".$hash."' LIMIT 1");
        if(mysql_num_rows($user) == 1){
            $row = mysql_fetch_array($user);
            $_SESSION['login'] = true;
        }
        else {
            $fail = 'true';
        }
    }
?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <table width="200">
      <tr>
        <td width="80">Login</td><td><input type="textfield" name="login" size="20"></td>
      </tr>
      <tr>
        <td>Password</td><td><input type="password" name="pwd" size="20"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" size="20" value="Login">
        <?php if ($fail=='true') {echo '<br><br>Falsches Login oder Passwort<br>Hash: '.$hash; } if ($_SESSION['login'] == true) {echo '<br><br>Login erfolgreich !<br><br>Daten werden geladen...<meta http-equiv="refresh" content="2;URL=index.php">'; }?></td>
      </tr>
    </table>
</form>
</div>