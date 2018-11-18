<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'free-ends');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%0iu3Yt;Z/HaG.,7SKSLfWN}b2TFJ0vGAjDx1X}mJ=fJ:U}6 zRxB-;C5YD/XbI&');
define('SECURE_AUTH_KEY',  '}E*YAlG.Ua-..kzx*{$c)+}8:EAosIE9<xJ.4BmE;8I.@Ym2Q2P8;{/|yQBX<;nx');
define('LOGGED_IN_KEY',    'Rt2*d-%I%c[icjz@&(*DRx)j7(b}v`denqU =7gL]0j#cg`A(1_F$WJ[IHy~1a.A');
define('NONCE_KEY',        '?<oWl#x6T~vli,)oQ!($&e2!%PLDItwFky:{fdHw+o5p^k|?d $w/ZrSJs-f{X-h');
define('AUTH_SALT',        'lEL>f2UL^E<0HE|3Y-/YB~A~V`HmC!n_kPVKm`G1>uA;O$U&e]6Zv*}>M]{PkKTD');
define('SECURE_AUTH_SALT', ']o4gz2bGl`cHN#z^WO1g#rDfNWtv(.vk]QrM&<TZor|AL.KY+bqS}Y_2SnFwGGo{');
define('LOGGED_IN_SALT',   '7KTa+B;Ztp;dyP)5UOKi`Op][:)i9v.s2c`__6Y3i<(1qo<]7c3/wT<k2 8r@`BH');
define('NONCE_SALT',       '2!h_S5]r0N9[0dp|Lw`|fF+.X~C9rB5^ n15/fgS8R{0K];V_tKbM.jnl>d#~8at');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
