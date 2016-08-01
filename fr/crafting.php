<?php

$js[] = 'js/script.js';

$xml_equipment = simplexml_load_file("xml/equipment.xml") or die("Error: Cannot create object");
$xml_styles = simplexml_load_file("xml/styles.xml") or die("Error: Cannot create object");
$xml_enchanting = simplexml_load_file("xml/enchanting.xml") or die("Error: Cannot create object");
$xml_alchemy = simplexml_load_file("xml/alchemy.xml") or die("Error: Cannot create object");
