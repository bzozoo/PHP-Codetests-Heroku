<?php

use Firebase\JWT\JWT;
use Firebase\JWT\ExpiredException;

require_once('./vendor/autoload.php');

class Token {
	
	private $secretkey;
	private $issuedAt;
	
	function __construct() {
		$this->secretkey = 'ZWxrbWZqbndmbnBlbmZwb8Opam9iIG7DqWxqZsOpbGVibsOpbGtqZsOpbGtqZWJsamJmLmRiw61reSBmLC5zYi5kYmhhZmxrd3d3aHNkZ2Jma2xqdmJoZGxraHZiZmhuIG5iIG1hc2QgYixoZGZsYmgsZm1uYiBzZCxtZiBoLGptIHZmcix3amVoYnZmaGV2YmgsaGJ2ICBzYW1uYiBkZiwgdmJoLHNkamF2YmhGLEpWQkgsSkhBQlYsamhidkEsUyBWSEJERixIVkJIU05CQVZERixNTkJWIEFTLEhOREZodiAsayBibiBzYSxtaGIgZGYsaiB2YixzamF2YmhERktMSEFibGRma3cgLG1idyAsandodmJsZGZqa3ZMLEggVkRGLEpWQkhTLEFIVkJGSktMVUJMS0pIVzNCLEhEVkIsLkhWQg==';
		$this->issuedAt   = new DateTimeImmutable();
	}
	
	public function getToken($userName = '', $userId = '', $userSecret = ''){
		$secretKey = $this->secretkey;
		$issuedAt = $this->issuedAt;
		$expire = $this->issuedAt->modify("+5 minutes")->getTimestamp();
		
		$data = [
			'iat'  => $issuedAt->getTimestamp(),         // Issued at: time when the token was generated
			'iss'  => 'UserSystem',                       // Issuer
			'nbf'  => $issuedAt->getTimestamp(),         // Not before
			'exp'  => $expire,                           // Expire
			'userName' => $userName,                     // User name
			'userId' => $userId,
			'userSecret' => $userSecret,
		];
		
		return JWT::encode(
        $data,
        $secretKey,
        'HS512'
		);
	}
	
	public function checkToken($jwt = '') {
		$secretKey = $this->secretkey;
		$iss = 'UserSystem';
		$now = new DateTimeImmutable();
		$token = JWT::decode($jwt, $secretKey, ['HS512']);
		return $token;
	}
}