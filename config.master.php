<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Cherry pick the contents of this file and paste into Focus Lab LLC's EE Master Config,
 * or modify and use within the bootstrap method of your choosing.
 *
 * You may further need to modify the below to suit your particular folder structure.
 * We work with the following:
 *
 * 	./
 * 	./backups				<-- Backup Pro or Backup Pro(ish)
 * 	./config 				<-- FocusLab LLC's EE Master Config
 * 	./htdocs 				<-- Web Root, aka $base_path
 *	./htdocs/static			<-- Renamed "images" folder
 *	./snippets 				<-- Boldminded Snippet Sync
 *	./system 				<-- EE system folder
 *	./templates 			<-- Save templates as files
 *
 *
 */


/**
 * Assets
 * http://devot-ee.com/add-ons/assets
 * http://docs.pixelandtonic.com/assets
 * http://expressionengine.stackexchange.com/questions/6369/assets2-borked-after-removing-index-php-official-ellislab-method
 *
 * Currently undocumented, but as of Assets 2.1.4 the following config are available:
 * 		- assets_site_url
 * 		- assets_use_uncompressed_js
 *		- assets_cache_remote_images
 *		- assets_cp_path
 */
$env_config['assets_site_url'] = '/index.php';


/**
 * Backup Pro / Pro(ish)
 * http://devot-ee.com/add-ons/backup-pro
 * http://devot-ee.com/add-ons/backup-proish
 * http://www.mithra62.com/docs/detail/backup-pro-configuration/
 * http://devot-ee.com/add-ons/support/backup-proish/viewthread/9498#35352
 */
$env_config['backup_pro'] = array(
	'backup_store_location' => realpath($base_path . '/../backups'),
	'backup_file_location' => realpath($base_path . '/../'),
	'db_backup_method' => 'php',
	'db_restore_method' => 'mysql',
	'exclude_paths' => array(
		realpath($base_path . '/../backups'),
		$base_path . '/static'
	)
);


/**
 * CE Cache
 * http://devot-ee.com/add-ons/ce-cache
 * http://www.causingeffect.com/software/expressionengine/ce-cache/user-guide/configuration
 */
$env_config['ce_cache_off'] = 'no';


/**
 * CE Image
 * http://devot-ee.com/add-ons/ce-image
 * http://www.causingeffect.com/software/expressionengine/ce-image/user-guide/configuration
 */
$env_config['ce_image_cache_dir'] = '/static/cache/made';
$env_config['ce_image_remote_dir'] = '/static/cache/made_remote';
$env_config['ce_image_quality'] = 100;


/**
 * Minimee
 * http://devot-ee.com/add-ons/minimee
 * http://johndwells.github.io/Minimee
 */
$env_config['minimee'] = array(
	'cache_path' => 'static/cache/min',
	'cache_url' => 'static/cache/min'
);


/**
 * Snippet Sync
 * http://devot-ee.com/add-ons/snippet-sync
 * http://devot-ee.com/add-ons/snippet-sync-developer-license
 * https://boldminded.com/add-ons/snippet-sync/documentation
 */
$env_config['snippet_file_basepath'] = realpath($base_path . '/../snippets');
$env_config['snippets_sync_prefix'] = 'snippet:';
$env_config['snippets_sync_suffix'] = '/';


/* End of file config.master.php */
/* Location: ./config/config.master.php */