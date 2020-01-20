<?php
const GIT_COMMAND = "/usr/bin/git pull 2>&1";

print("GISS ghetto CI/CD to pull changes from github or other code repos<br>");
$logline = "Received GIT webhook request from : $access {$_SERVER['REMOTE_ADDR']} - git command " . GIT_COMMAND;
print($logline . "<br>");
openlog("GISSforms", LOG_PID | LOG_PERROR, LOG_LOCAL0);
$access = date("Y/m/d H:i:s");
syslog(LOG_NOTICE, $logline);
closelog();

$output = shell_exec(GIT_COMMAND);
print("GIT command output was: ". $output);
?>