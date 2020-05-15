<?php

session_start();
session_destroy();

header('location:login.php');


?>

// create questions
var questions = [

new Question("What is the capacity of typical DVD?", ["40 MB", "50 MB","60 MB", "4.7 GB"], "4.7 GB"),

new Question("Which process is used to record data on to an optical disc?", ["Burning", "Reading","Accepting", "Accessing"], "Burning"),

new Question("Which software interfaces the major hardware components of the computer with OS?", ["BIOS", "CMOS","DOS", "POST"], "BIOS"),

new Question("What is BIOS?", ["Firmware  ", "Hardware  ","Middleware", "Software"], "Firmware"),

new Question("What is the purpose of Nero Start Smart?", ["Format HDD", "Burn CD/DVD","Format pen drive", "Format CD/DVD"], "Burn CD/DVD"),

new Question("Which system is used by bluetooth for board casting?", ["Satellite", "Microwaves","Telephone lines", "Radio wave"], "Microwaves"),

new Question("Which program is used to enable the devices to work with OS?", ["Antivirus", "Device driver","Antivirus", "Application Software"], "Device driver"),

new Question("What is the name of the smaller divisions made in Hard disk?", ["Head", "Partitions","Sectors", "Tacks"], "Partitions"),

new Question("Which key is used to open CMOS setup utility?", ["Alt", "Del","Enter", "Tab"], "Del"),

new Question("What is the process of deleting all the data on the hard drive?", ["Delete ", "Erase ","Formatting", "Uninstall "], "Formatting"),

];