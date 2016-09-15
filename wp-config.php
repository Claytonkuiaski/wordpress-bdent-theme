<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'banco');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'banco');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'mogui123');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1[Z_aYSZyN,cK.<yw5NXr;EL]ND7&~CNVw*M+?Ew;$P2vX4 M&t>C|OU>(yNDi`z');
define('SECURE_AUTH_KEY',  '1S!7PV,}]ZfL(yi6]dQ1XjhSc-G+l~AFD4m0kR^>P*t5)Sujdvq.sn+N+E7as!Dw');
define('LOGGED_IN_KEY',    'I%n#a(=HLh]9f7.XQI&?_|m#=!3qP6hDmu~NALF#ao4cR[$vTC/{c$X$<:-a{4$n');
define('NONCE_KEY',        ',v.VfL1zTpRG9;]dmY}p[2)Q6_H k}g;rmeaz:ANoH#|]7IH/LsF${HuB)IHgR~_');
define('AUTH_SALT',        '0?%7C!NN/D$<j7E jCjYx%r{LiH3{/ B!?>k2efs=5XvXHY])fmM|{RnC_z4[&mu');
define('SECURE_AUTH_SALT', 'j*{4>*vcZIaG ^B>D>UVy:PF2lN(=<:akHKfskTR{t3/tHkriVIf:Tsg/+!PU|[6');
define('LOGGED_IN_SALT',   'LY6g)iaY6!qB3K8x2k@zXX(?y,HL!7r;-C6B}w8Arr7,5Xx8if$-vOmPLpIjtV*^');
define('NONCE_SALT',       'MqGfcK*U$zPTqS:/KV0;V19~5ik< E~Vv~nx>7:go3,{ylm(:FuK97M|W|;/G.D$');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
