<!DOCTYPE HTML> 
<html>

<head>
<meta charset="utf-8">
<title>米尔 MYD-C8MMX 物联网</title>
</head>

<body>
    <h1>米尔 MYD-C8MMX 开发板 物联网 demo<br><br>
    led control / LED 控制:<br><br>
<form action="" method="post">
    green led:<br>
    on<input type="radio" name="green" value="on">
    off<input type="radio" name="green" value="off">
    heartbeat<input type="radio" name="green" value="heartbeat"><br><br>
    blue led:<br>
    on<input type="radio" name="blue" value="on">
    off<input type="radio" name="blue" value="off">
    heartbeat<input type="radio" name="blue" value="heartbeat"><br><br>
    <input type="submit" name="submit" value="确定"><br><br>
</form>

led statis / LED 状态:<br>
<?php
echo "green led: ";
if ($_REQUEST["green"] == "on")
{
    exec("/usr/bin/mosquitto_pub -h 47.103.3.155 -t c8mmx/led/green/trigger -m none");
    exec("/usr/bin/mosquitto_pub -h 47.103.3.155 -t c8mmx/led/green/brightness -m 1");
    echo "on.";
}
elseif ($_REQUEST["green"] == "off")
{
    exec("/usr/bin/mosquitto_pub -h 47.103.3.155 -t c8mmx/led/green/trigger -m none");
    exec("/usr/bin/mosquitto_pub -h 47.103.3.155 -t c8mmx/led/green/brightness -m 0");
    echo "off.";
}
elseif ($_REQUEST["green"] == "heartbeat")
{
    exec("/usr/bin/mosquitto_pub -h 47.103.3.155 -t c8mmx/led/green/brightness -m 0");
    exec("/usr/bin/mosquitto_pub -h 47.103.3.155 -t c8mmx/led/green/trigger -m heartbeat");
    echo "heartbeat.";
}
else
{
    echo "unchanged.";
}

echo "<br>";

echo "blue led:  ";
if ($_REQUEST["blue"] == "on")
{
    exec("/usr/bin/mosquitto_pub -h 47.103.3.155 -t c8mmx/led/blue/trigger -m none");
    exec("/usr/bin/mosquitto_pub -h 47.103.3.155 -t c8mmx/led/blue/brightness -m 1");
    echo "on.";
}
elseif ($_REQUEST["blue"] == "off")
{
    exec("/usr/bin/mosquitto_pub -h 47.103.3.155 -t c8mmx/led/blue/trigger -m none");
    exec("/usr/bin/mosquitto_pub -h 47.103.3.155 -t c8mmx/led/blue/brightness -m 0");
    echo "off.";
}
elseif ($_REQUEST["blue"] == "heartbeat")
{
    exec("/usr/bin/mosquitto_pub -h 47.103.3.155 -t c8mmx/led/blue/brightness -m 0");
    exec("/usr/bin/mosquitto_pub -h 47.103.3.155 -t c8mmx/led/blue/trigger -m heartbeat");
    echo "heartbeat.";
}
else
{
    echo "unchanged.";
}

?>
</h1>
</body>


