<h1>Welcome to the Bacon Blog</h1>
 
<?php
 
$articles = array();
 
$article = new stdClass();
$article->name = 'Baconation';
$article->author = 'Baconator';
$article->body = 'Bacon ipsum dolor sit amet sirloin strip steak t-bone, biltong tongue jowl spare ribs corned beef swine doner shoulder ham pork chop. Pancetta shank turducken andouille, short loin prosciutto kevin kielbasa beef ribs shankle pork chop. Ribeye salami pork chop andouille frankfurter jowl turkey hamburger pancetta. Drumstick andouille pork hamburger, frankfurter beef ribs pork belly prosciutto landjaeger t-bone turducken. Pork chop frankfurter andouille, pork belly rump leberkas turkey tongue. Chicken meatball tri-tip brisket ham hock frankfurter short loin beef strip steak.';
$articles[] = $article;
 
 
$article = new stdClass();
$article->name = 'Bacon-alia';
$article->author = 'Strips McGreasy';
$article->body = 'Pork chop bresaola boudin ham short loin ribeye prosciutto porchetta pastrami. Capicola sausage boudin pork flank kielbasa. Bacon short ribs landjaeger cow beef ribs frankfurter fatback meatloaf ham hock salami sirloin beef. Doner prosciutto chicken kevin pork chop, shankle rump t-bone tongue short ribs strip steak bresaola. Chuck salami swine corned beef kevin sausage fatback pork beef venison brisket prosciutto. Ground round turkey beef ribs boudin, beef strip steak shankle.';
$articles[] = $article;
 
 
$article = new stdClass();
$article->name = 'Bacon is Mouth Xmas';
$article->author = 'Sir Bacon of Flatback';
$article->body = 'Bacon ipsum dolor sit amet sirloin strip steak t-bone, biltong tongue jowl spare ribs corned beef swine doner shoulder ham pork chop. Pancetta shank turducken andouille, short loin prosciutto kevin kielbasa beef ribs shankle pork chop. Ribeye salami pork chop andouille frankfurter jowl turkey hamburger pancetta. Drumstick andouille pork hamburger, frankfurter beef ribs pork belly prosciutto landjaeger t-bone turducken. Pork chop frankfurter andouille, pork belly rump leberkas turkey tongue. Chicken meatball tri-tip brisket ham hock frankfurter short loin beef strip steak.

Pork chop bresaola boudin ham short loin ribeye prosciutto porchetta pastrami. Capicola sausage boudin pork flank kielbasa. Bacon short ribs landjaeger cow beef ribs frankfurter fatback meatloaf ham hock salami sirloin beef. Doner prosciutto chicken kevin pork chop, shankle rump t-bone tongue short ribs strip steak bresaola. Chuck salami swine corned beef kevin sausage fatback pork beef venison brisket prosciutto. Ground round turkey beef ribs boudin, beef strip steak shankle.';
$articles[] = $article;
 
foreach ($articles as $piece){
    print '<h2>' . $piece->name . '</h2>';
    print '<em>By: ' . $piece->author . '</em><br/>';
    print $piece->body . '<br/><br/>';
 
}
 
 
 
?>
