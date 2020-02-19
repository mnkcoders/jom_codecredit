<?php
/**
 * @package     CODERS.Credit
 * @subpackage  com_codecredit
 *
 */

defined('_JEXEC') or die;

/**
 * 
 */
class CodersCreditController extends JControllerLegacy
{
	/**
	 * @var    string  The default view.
	 */
	protected $default_view = 'repository';

	/**
	 * Method to display the view.
	 *
	 * @param   boolean  $cachable   If true, the view output will be cached
	 * @param   array    $urlparams  An array of safe URL parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return  CodersCreditController  This object to support chaining.
	 */
	public function display($cachable = false, $urlparams = array())
	{
		$view = $this->input->get('view', $this->default_view );

                print $view;
                
                return $this;
	}
}


