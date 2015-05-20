<?php
/**
 * Translation Plugin: Simple multilanguage plugin
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Andreas Gohr <andi@splitbrain.org>
 */

// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

class helper_plugin_door43shared extends DokuWiki_Plugin {

    /**
     * Initialize
     */
    function helper_plugin_door43shared() {

        // initialization code
    }

    function loadPluginBase() {
        require_once 'base_classes/plugin_base.php';
    }

    function loadAjaxHelper() {
        require_once 'base_classes/ajax_helper.php';
    }
}
