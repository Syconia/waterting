<?php
function gen_salt(int $len) {
	return openssl_random_pseudo_bytes($len, TRUE);
}

function salted_hash(string $p_string, string $s_string) {
	return hash('md5', $p_string . $s_string);
}
?>