<?PHP
function ft_split($str) {
	$str = trim($str);
	$str = preg_replace('/ {2,}/', ' ', $str);
	$tab = split(" ", $str);

	sort($tab);
	return $tab;
}
?>