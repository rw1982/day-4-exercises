<?php
// You may get an error if you don't set your time zone like this.
date_default_timezone_set('America/New_York');
 
// "\n" is a line break. It's a text line break not an HTML line break.
print "For Americans, today's date is written as " . date('M d, Y') . ' or ' . date('n/d/Y') . ".\n";
 
print "For the British, today's date is written as " . date('d M, Y') . ' or ' . date('d/n/Y') . ".\n";
 
print "For computers, today's date is written as " . date('U') . ".\n";