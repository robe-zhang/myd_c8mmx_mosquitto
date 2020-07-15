<!DOCTYPE HTML> 
<html>

<head>
<meta charset="utf-8">
<title>米尔 MYD-C8MMX 物联网</title>
<style>
h2 {font-size:200%;}
h3 {font-size:160%;}
h4 {font-size:140%;}
</style>
</head>

<body>
    <h2>米尔 MYD-C8MMX 开发板 物联网 demo</h2><br>
    <h3>led control / LED 控制:</h3>
    <h4>
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
</h4>
<h3>led statis / LED 状态:</h3>
<h4>
<?php
$MQTT_IP="47.103.3.155";
echo "green led: ";
if ($_REQUEST["green"] == "on")
{
    exec("/usr/bin/mosquitto_pub -h $MQTT_IP -t c8mmx/led/green/trigger -m none");
    exec("/usr/bin/mosquitto_pub -h $MQTT_IP -t c8mmx/led/green/brightness -m 1");
    echo "on.";
}
elseif ($_REQUEST["green"] == "off")
{
    exec("/usr/bin/mosquitto_pub -h $MQTT_IP -t c8mmx/led/green/trigger -m none");
    exec("/usr/bin/mosquitto_pub -h $MQTT_IP -t c8mmx/led/green/brightness -m 0");
    echo "off.";
}
elseif ($_REQUEST["green"] == "heartbeat")
{
    exec("/usr/bin/mosquitto_pub -h $MQTT_IP -t c8mmx/led/green/brightness -m 0");
    exec("/usr/bin/mosquitto_pub -h $MQTT_IP -t c8mmx/led/green/trigger -m heartbeat");
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
    exec("/usr/bin/mosquitto_pub -h $MQTT_IP -t c8mmx/led/blue/trigger -m none");
    exec("/usr/bin/mosquitto_pub -h $MQTT_IP -t c8mmx/led/blue/brightness -m 1");
    echo "on.";
}
elseif ($_REQUEST["blue"] == "off")
{
    exec("/usr/bin/mosquitto_pub -h $MQTT_IP -t c8mmx/led/blue/trigger -m none");
    exec("/usr/bin/mosquitto_pub -h $MQTT_IP -t c8mmx/led/blue/brightness -m 0");
    echo "off.";
}
elseif ($_REQUEST["blue"] == "heartbeat")
{
    exec("/usr/bin/mosquitto_pub -h $MQTT_IP -t c8mmx/led/blue/brightness -m 0");
    exec("/usr/bin/mosquitto_pub -h $MQTT_IP -t c8mmx/led/blue/trigger -m heartbeat");
    echo "heartbeat.";
}
else
{
    echo "unchanged.";
}
?>
</h4>
</body>


