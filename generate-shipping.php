#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';

/** @var WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions */
$options = (WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions::instance());
$options
    ->setOrigin('https://ws.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl')
    ->setDestination('.')
    ->setStandalone(false)
    ->setComposerName('fysiki/chronopost_sdk')
    ->setNamespace('Chronopost')
;
// Generator instantiation
$generator = new WsdlToPhp\PackageGenerator\Generator\Generator($options);
// Package generation
$generator->generatePackage();
