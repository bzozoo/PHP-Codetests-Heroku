<?php
echo '';

//GET DATAS
echo '$_GET';
echo '<br />';
echo json_encode($_GET);
echo '<br />';
echo "REQUEST_URI";
echo '<br />';
echo json_encode($_SERVER['REQUEST_URI']);
echo '<br />';
echo '<br />';

// WITH INDEX
$rand1 = rand(1000, 20000000);
echo '<a href="/index.php?page=tesztpage&oldal=' . $rand1 . '" />/index.php?page=tesztpage&oldal=' . $rand1 . '5</a>';
echo '<br />';
echo '<br />';

//WITHOUT INDEX
$rand2 = rand(1000, 20000000);
echo '<a href="/?page=tesztpage&oldal=' . $rand2 . '" />/?page=tesztpage&oldal=' . $rand1 . '</a>';
echo '<br />';
echo '<br />';

//SZIMPLA WITH INDEX
$rand3a = rand(1000, 20000000);
echo '<a href="/index.php?page=szimpla' . $rand3a . 'page" />/index.php?page=szimpla' . $rand3a . 'page</a>';
echo '<br />';
echo '<br />';

//SZIMPLA
$rand3 = rand(1000, 20000000);
echo '<a href="/?page=szimpla' . $rand3 . 'page" />/?page=szimpla' . $rand3 . 'page</a>';
echo '<br />';
echo '<br />';

//PRETTY WITH PAGE
$rand4 = rand(1000, 20000000);
echo '<a href="/tesztoldal/oldal-' . $rand4 . '" />/tesztoldal/oldal-' . $rand4 . '</a>';
echo '<br />';
echo '<br />';

//PRETTY WITH PAGE 2
$rand5 = rand(1000, 20000000);
echo '<a href="/masikoldal/oldal-' . $rand5 . '" />/masikoldal/oldal-' . $rand5 . '</a>';
echo '<br />';
echo '<br />';

//PRETTY SZIMPLA
$rand6 = rand(1000, 20000000);
echo '<a href="/szimplaoldal' . $rand6 . '" />/szimplaoldal' . $rand6 . '</a>';
echo '<br />';
echo '<br />';

//EXIST
echo '<a href="/exist" />/exist</a>';
echo '<br />';
echo '<br />';

//Z
echo '<a href="/z.php" />/z.php</a>';