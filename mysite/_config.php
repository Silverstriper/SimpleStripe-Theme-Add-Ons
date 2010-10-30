/**************************
/ Simplestripe Theme Extras
***************************/
//Site Config Data Extension
DataObject::add_extension('SiteConfig', 'SiteConfigExtra');

//Enable Site Search + run dev/build to build tables
//NOTE: If you enable Full Text Search go into the  themes includess/Sidebar.ss file and uncomment code to revela search form
//FulltextSearchable::enable();