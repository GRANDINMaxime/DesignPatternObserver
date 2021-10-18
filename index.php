<?php

$partenaire = new Partner();
$partenaire->setPartnerName("Maxime");

$casting = new Casting();
$casting->setCastingName("Casting1");

$partenaire->subscribe($casting);

$partenaire->update();
