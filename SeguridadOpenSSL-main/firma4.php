<?PHP

$config = array('config'=>'C:/OpenSSL-Win64/bin/cnf/openssl.cnf');
$pkey = openssl_pkey_new($config);
$crs = openssl_csr_new('MyCRS',$pkey,$config);


?>