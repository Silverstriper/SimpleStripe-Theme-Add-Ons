<?php

class SiteConfigExtra extends DataObjectDecorator{
     function extraStatics() {
		return array(
			'db' => array(
				"TypekitID" => "Varchar(7)",
				"GoogleAnalytics" => "Varchar(12)",
				"TwitterAccount" => "Varchar(20)",		
			)
		);
	}

	public function updateCMSFields(&$fields) {
		$fields->addFieldToTab('Root.SiteConfigInformation', new HeaderField("info", "Site Config Information", 2));
		$fields->addFieldToTab("Root.SiteConfigInformation", new TextField("TypekitID", _t('SiteConfig.TypekitID',"TypeKit Kit ID")));
		$fields->addFieldToTab("Root.SiteConfigInformation", new TextField("GoogleAnalytics", _t('SiteConfig.GoogleAnalytics',"Google Analytics Code")));
		$fields->addFieldToTab("Root.SiteConfigInformation", new TextField("TwitterAccount", _t('SiteConfig.TwitterAccount',"Twitter Account")));
	}
		
	
	
}

?>