<!DOCTYPE html>
<?php
defined('_JEXEC') or die;

?>
<html>
<head>
	<jdoc:include type="head" />
	
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/digital_advantage/css/template.css" />
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-25226959-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>

<body>
	
	<div id="all">
		<div id="header"><div><div class="container">
			<div id="logo1"><jdoc:include type="modules" name="logo" style="xhtml" /></div>
			<div id="search"><jdoc:include type="modules" name="search" style="xhtml" /></div>
			<div id="menu"><jdoc:include type="modules" name="menu" style="xhtml" /></div>
			
			<div class="clear margins"></div>
		</div></div></div>
		
		<div id="masthead"><div><div><div class="container">
			<div class="clear margins"></div>
			
			<jdoc:include type="modules" name="header" style="xhtml" />
			
			<div id="social1">
				<jdoc:include type="modules" name="social1" style="xhtml" />
			</div>
			
			<div class="clear margins"></div>
		</div></div></div></div>
		
		<div id="body"><div class="container">
			<div id="topfrill"><img src="/templates/digital_advantage/images/sidebar_bg_top.png" /></div>
			<div id="bottomfrill"><img src="/templates/digital_advantage/images/sidebar_bg_bottom.png" /></div>
		
			<div id="component">
				<jdoc:include type="component" />
				<div class="clear"></div>
				<jdoc:include type="modules" name="bottom" style="xhtml" />
				<div class="clear"></div>
			</div>
			
			<div id="sidebar">
				<jdoc:include type="modules" name="sidebar" style="xhtml" />

				<div class="clear"></div>
			</div>
			
			<div class="clear margins"></div>
		</div></div>
		
		<div id="footer"><div class="container">
			<div id="logo2"><jdoc:include type="modules" name="logo2" style="xhtml" /></div>
			<div id="social2"><jdoc:include type="modules" name="social2" style="xhtml" /></div>
			<div id="copyright"><jdoc:include type="modules" name="copyright" style="xhtml" /></div>
			<div id="bottommenu"><jdoc:include type="modules" name="bottommenu" style="xhtml" /></div>
		</div></div>
	</div>
	
	<script src="/templates/digital_advantage/javascript/slider.js"></script>
	
</body>
</html>