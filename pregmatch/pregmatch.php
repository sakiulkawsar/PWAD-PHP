<?php 
$line = "vim is a the gretest word processor in the world";

if(preg_match("/\bword\b/",$line,$match)){
    echo "Match found: " . $match[0];
} else {
    echo "No match found.";
}

?>