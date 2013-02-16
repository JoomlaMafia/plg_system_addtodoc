<?php defined('_JEXEC') or die;
/**
 * @copyright   Copyright (C) 2013 mktgexperts.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see http://www.gnu.org/licenses/gpl-2.0.html
 */

defined('JPATH_BASE') or die;

/**
 * Plugin class for add one script.
 *
 */
class plgSystemAddToHead extends JPlugin {

	/**
	 * Constructor
	 *
	 * @access      protected
	 * @param       object  $subject The object to observe
	 * @param       array   $config  An array that holds the plugin configuration
	 */
	public function __construct(& $subject, $config){
		parent::__construct($subject, $config);
		$this->loadLanguage();
	}

	function onBeforeRender() {
		$app = & JFactory::getApplication();
		// Executes only on site side
		if ($app->getName() == "site")
		{
			$doc =& JFactory::getDocument();
			// Include inline script to document head
			$doc->addScriptDeclaration($this->params->get('script'));
		}
	}
}
