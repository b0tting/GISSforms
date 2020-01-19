<?php
const GIT_LOCATION = "/usr/bin/git";

// I take the local file as your provider might not allow remote access
$configfile = file_get_contents("giss.js");

// Some formatting to convert my js to json
$configfile = str_replace("configuration = ", "", $configfile);
$configfile = rtrim($configfile);
$configfile = rtrim($configfile, ";");

$json_a = json_decode($configfile, true);
$gitcommand = $json_a["git_command"];

print("GISS ghetto CI/CD to pull changes from github or other code repos");
openlog("GISSforms", LOG_PID | LOG_PERROR, LOG_LOCAL0);
$access = date("Y/m/d H:i:s");
syslog(LOG_NOTICE, "Received GIT webhook request from : $access {$_SERVER['REMOTE_ADDR']} - git command " . $gitcommand);
closelog();

$params = explode(" ", $gitcommand);
if(pcntl_exec(GIT_LOCATION, $params) == null) {
    print("<pre> GIT command " . $gitcommand . " was succesful.");
} else {
    print("<pre> GIT command " . $gitcommand . " was not succesful. Do a manual git pull please.");
}

?>