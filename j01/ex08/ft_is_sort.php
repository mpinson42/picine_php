<?PHP
	function ft_is_sort($tab) {
	$copy = $tab;
	$i = 0;
	sort($copy);

	foreach ($tab as $val) {
			if($val != $copy[$i])
				return(False);
			$i++;
		}	
	return True;
}
?>
