<html>
<?PHP
if($_POST['on']=='on')
 {
   shell_exec("echo 'on 5' | cec-client -s");
   sleep(1);
   shell_exec("echo 'as' | cec-client -b 5 -p 1 -s");
 }
if($_POST['off']=='off')
 {
  shell_exec("echo 'standby 5' | cec-client -s");
  shell_exec("echo 'standby 4' | cec-client -s");
  
}
if($_POST['vol']=='volup')
 {
  shell_exec("echo 'tx 15:44:41' | cec-client -s");
}
if($_POST['vol']=='voldown')
 {
  shell_exec("echo 'tx 15:44:42' | cec-client -s");
}
if($_POST['TV']=='TV')
 {
  shell_exec("echo 'tx 1f:82:21:00' | cec-client -s");
}
if($_POST['PI']=='PI')
 {
  shell_exec("echo 'tx 1f:82:12:00' | cec-client -s");
}
if($_POST['BD']=='BD')
 {
  
  shell_exec("echo 'tx 1f:82:11:00' | cec-client -s");
  shell_exec("echo 'tx 14:44:40' | cec-client -s");
}
?>
amplituner:
<form name='klikanie' method='post' action='amp.php'>
<input type='submit' value='on' name='on' style='width:120; height:30'>
<input type='submit' value='off' name='off' style='width:120; height:30'><br>
<input type='submit' value='volup' name='vol' style='width:120; height:30'>
<input type='submit' value='voldown' name='vol' style='width:120; height:30'><br>
<input type='submit' value='TV' name='TV' style='width:79; height:30'>
<input type='submit' value='PI' name='PI' style='width:79; height:30'>
<input type='submit' value='BD' name='BD' style='width:79; height:30'><br>
</form>
</body>

