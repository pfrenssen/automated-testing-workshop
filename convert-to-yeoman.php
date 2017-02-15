#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

use Symfony\Component\DomCrawler\Crawler;

$crawler = new Crawler(file_get_contents('/home/pieter/v/d8-training/index.html'));
$crawler = $crawler->filter('div.slides section');

$titles = [];

/** @var DOMElement $slide */
foreach ($crawler as $slide) {
    $title = get_title($slide) ?: 'no-title';
    $document = $slide->ownerDocument;
    $inner_html = '';
    foreach ($slide->childNodes as $node) {
        $inner_html .= $document->saveHTML($node);
    }
    var_dump($inner_html);
    while (in_array($title, $titles)) {
        echo "Title already exists: $title";
        $title = readline("\nEnter new title: ");
    }
    $titles[] = $title;
    $output = '';
    exec('yo reveal:slide "' . $title . '" --markdown 2>&1', $output, $return_code);
    var_dump($output);
    list($status, $filename) = explode(" ", trim(end($output)));
    var_dump($status);
    var_dump($filename);
    var_dump($return_code);
    file_put_contents($filename, $inner_html);
}

function get_title(DOMElement $slide) {
    foreach (['h1', 'h2', 'h3'] as $heading) {
        /** @var DOMElement $element */
        foreach ($slide->getElementsByTagName($heading) as $element) {
            return $element->textContent;
        }
    }
    return FALSE;
}
