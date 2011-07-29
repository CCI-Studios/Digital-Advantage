<!DOCTYPE html>
<?php
defined('_JEXEC') or die;


?>
<html>
<head>
	<jdoc:include type="head" />
	
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/digital_advantage/css/template.css" />
</head>

<body>
	
	<div id="all">
		<div id="header"><div><div class="container">
			<div id="logo1"><jdoc:include type="modules" name="logo" style="xhtml" /></div>
			<div id="search"><jdoc:include type="modules" name="search" style="xhtml" /></div>
			<div id="menu"><jdoc:include type="modules" name="menu" style="xhtml" /></div>
		</div></div></div>
		
		<div id="masthead"><div><div><div class="container">
			<jdoc:include type="modules" name="header" style="xhtml" />
			
			<div id="social1">
				<jdoc:include type="modules" name="social1" style="xhtml" />
			</div>
		</div></div></div></div>
		
		<div id="body"><div class="container">
			<div id="topfrill"><img src="/templates/digital_advantage/images/sidebar_bg_top.png" /></div>
			<div id="bottomfrill"><img src="/templates/digital_advantage/images/sidebar_bg_bottom.png" /></div>
		
			<div id="component">
				<jdoc:include type="component" />
				<div class="clear"></div>
			</div>
			
			<div id="sidebar">
				<jdoc:include type="modules" name="sidebar" style="xhtml" />

				<div class="clear"></div>
			</div>
			
			<div class="clear"></div>
		</div></div>
		
		<div id="footer"><div class="container">
			<div id="logo2"><jdoc:include type="modules" name="logo2" style="xhtml" /></div>
			<div id="social2"><jdoc:include type="modules" name="social2" style="xhtml" /></div>
			<div id="copyright"><jdoc:include type="modules" name="copyright" style="xhtml" /></div>
		</div></div>
	</div>
	
</body>
</html>