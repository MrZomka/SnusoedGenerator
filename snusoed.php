<?php if (!isset($_GET["plain"])) : ?>
<!DOCTYPE html>
<html>
<head><title>ГЕНЕРАТОР СНЮСОЕДОВ</title>
<style type="text/css">
h6 {
	text-align: center;
	font-weight: normal;
	color: #777;
}
a {
	color: #55C;
}
h3 {
	text-align: center;
	font-family: "Comic Sans MS";
	color: #0000FF;
	font-weight: normal;
	font-size: 24px;
}
h1 {
	text-align: center;
	color: #ff0000;
	font-family: "Comic Sans MS";
}
body {
	background-color: #000;
	background-image: url(snusoed.jpeg);
	font-family: "Comic Sans MS";
}
</style>
</head>
<body>
<h3>ГЕНЕРАТОР СНЮСОЕДОВ</h3>
<h1><?php endif; ?>
<?php
$combinations = array(
  "glagoly" => array("кидает", "принял", "отказался от", "срёт с помощью"),
  "things" => array("шелли в бабл квас", "minecraft", "снюсоедов", "анонимусов", "зубную пасту", "леона в бабл квас", "снюсоедов которые кидают снюс", "анонимусов которые кидают снюс", "снюс курва", "кактусов"),
	"snusoed" => array("снюсоед", "анонимус")
);
$sentences = array(
	"[snusoed] который [glagoly] [things]",
	"[snusoed] который [glagoly] [things]",
	"[snusoed] который [glagoly] [things]",
	"[snusoed] который [glagoly] [things]",
  "[snusoed] который кидает отравляющию питсу из сталовки",
  "[snusoed] который принял отравляющию питсу из сталовки",
  "[snusoed] который отказался от отравляющей питсы из сталовки",
  "[snusoed] который срёт с помощью отравляющей питсы из сталовки"
);

function str_replace_first($search, $replace, $subject) {
    $pos = strpos($subject, $search);
    if ($pos !== false) {
        $subject = substr_replace($subject, $replace, $pos, strlen($search));
    }
    return $subject;
}

$s = $sentences[rand(0, count($sentences)-1)];
foreach(array_keys($combinations) as $key) {
	for($i = 0; $i < 4; $i++) {
		$combo = $combinations[$key][rand(0, count($combinations[$key])-1)];
		$s = str_replace_first("[".$key."]", $combo, $s);
	}
}
echo($s);
?>
<?php if (!isset($_GET["plain"])) : ?>
</h1>
<h3><a href="http://metamc.net/snusoed.php">попробуй ещё раз</a></h3>
</body>
</html>
<?php endif; ?>
