<?php
/**
 * Defines the HomePage page type
 */
 
class HomePage extends Page {
   static $db = array(
   		'HomeMainHeading' => 'Text',
   		'HomeSubHeading' => 'Text',
   		'HomeCol1' => 'HTMLText',
   		'HomeCol2' => 'HTMLText'
   );
 
   
   function getCMSFields() {
		$fields = parent::getCMSFields();
		
		//Define First The HTML Editor Fields (cannot place them directly in addFieldToTab)
		$HomeCol1 = new HtmlEditorField('HomeCol1', 'Home Column 1', 10);
		$HomeCol2 = new HtmlEditorField('HomeCol2', 'Home Column 2', 10);
		
		$fields->addFieldToTab('Root.Content.Main', new TextField('HomeMainHeading'), 'Content');
		$fields->addFieldToTab('Root.Content.Main', new TextField('HomeSubHeading'), 'Content');
		$fields->addFieldToTab('Root.Content.Main', $HomeCol1, 'Content');
		$fields->addFieldToTab('Root.Content.Main', $HomeCol2, 'Content');
		$fields->removeFieldFromTab("Root.Content.Main","Content");
			
		return $fields;
	}
   
   
   
}
 
class HomePage_Controller extends Page_Controller {
		
	/**
	* GET BLOG POSTS FOR FOOTER
	* Used to pull news item snippets from DB and display on homepage
	*/
	function LatestBlogPosts($num=5) {
 		$blogs = DataObject::get_one("BlogHolder");
  		return ($blogs) ? DataObject::get("BlogEntry", "ParentID = $blogs->ID", "Date DESC", "", $num) : false;
	}	
			
}
?>