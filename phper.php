<?php
 
if(isset($_GET['save_config']))
{
// Content that will be written to the config file
$content = "<?php
";
   // Iterate each POST parameter and write the config file
foreach($_POST as $param_name => $value) {
$content.= "$config['db']['".$param_name."'] = '".addslashes($value)."';
";
}
$content.= "?>";
 
// Open the WEB_ROOT/includes/config.php for writing
$handle = fopen('../includes/config.php', 'w');
// Write the config file
fwrite($handle, $content);
// Close the file
fclose($handle);
 
header("Location: settings.php");
exit;
}
 
?>
