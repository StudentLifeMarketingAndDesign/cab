<?php
class About extends Page {

	private static $db = array(
				"FirstWords" => "Text",
				"LastWords" => "Text",
				"MissionStatement" => "HTMLText",
				"WordOne" => "Text",
				"WordTwo" => "Text",						
			


		);

	private static $has_one = array(
				"Image" => "Image",
				

	);
	
	function getCMSFields() {
		$fields = parent::getCMSFields();
	$fields->addFieldToTab('Root.Main', new TextField('FirstWords', 'Headline, first word'));
	$fields->addFieldToTab('Root.Main', new TextField('LastWords', 'Headline, last word'));	
	$fields->addFieldToTab("Root.Main", new HTMLEditorField('MissionStatement'));
	$fields->addFieldToTab('Root.Main', new UploadField('Image', 'Image'));

	$fields->addFieldToTab('Root.Main', new TextField('WordOne', 'Secondary Headline, first word'));
	$fields->addFieldToTab('Root.Main', new TextField('WordTwo', 'Secondary Headline, second word'));	
	
	
	



			  $fields->removeFieldFromTab("Root.Main","Content");

		return $fields;
	}
}
class About_Controller extends Page_Controller {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();

	}
}