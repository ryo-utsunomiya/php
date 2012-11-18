<?php
$filename = "blog.xml";

if (file_exists($filename)) {
    $rawBlog = file_get_contents($filename);
}
else {
$rawBlog = <<<EOT
<?xml version="1.0" encoding="utf-8" ?>
<blog>
<title>YouCube</title>
<author>Ruby</author>
<entries><entries>
</blog>
EOT;
}
$xml = new SimpleXmlElement($rawBlog);

$entry = $xml->entries->addChild("entry");
$entry->addChild("date", $_REQUEST['date']);
$entry->addChild("body", stripslashes($_REQUEST["body"]));
if (empty($_REQUEST['image'])) {
    $entry->addChild("image", $_REQUEST['image']);
}

$file = fopen($filename, 'w');
fwrite($file, $xml->asXML());
fclose($file);
