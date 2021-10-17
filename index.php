<?php

$partenaire = new Partner();
$partenaire->setPartnerName("Maxime");

$casting = new Casting("Casting1");
$partenaire->setCastingName("Casting1");

$partenaire->subscribe($casting);

$partenaire->update();
