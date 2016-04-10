<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

if($task == "edit" || $layout == "form" )
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/template.js');

// Add Stylesheets
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/template.css');

// Load optional RTL Bootstrap CSS
JHtml::_('bootstrap.loadCss', false, $this->direction);

// Adjusting content width
if ($this->countModules('position-7') && $this->countModules('position-8'))
{
	$span = "span6";
}
elseif ($this->countModules('position-7') && !$this->countModules('position-8'))
{
	$span = "span9";
}
elseif (!$this->countModules('position-7') && $this->countModules('position-8'))
{
	$span = "span9";
}
else
{
	$span = "span12";
}

// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />';
}
elseif ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle')) . '</span>';
}
else
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
	<?php // Use of Google Font ?>
	<?php if ($this->params->get('googleFont')) : ?>
		<link href='//fonts.googleapis.com/css?family=<?php echo $this->params->get('googleFontName'); ?>' rel='stylesheet' type='text/css' />
		<style type="text/css">
			h1,h2,h3,h4,h5,h6,.site-title{
				font-family: '<?php echo str_replace('+', ' ', $this->params->get('googleFontName')); ?>', sans-serif;
			}
		</style>
	<?php endif; ?>
	<?php // Template color ?>
	<?php if ($this->params->get('templateColor')) : ?>
	
	<style type="text/css">
		body.site
		{
			border-top: 3px solid <?php echo $this->params->get('templateColor'); ?>;
			background-color: <?php echo $this->params->get('templateBackgroundColor'); ?>
		}
		a
		{
			color: <?php echo $this->params->get('templateColor'); ?>;
		}

	</style>
	<?php endif; ?>
	<!--[if lt IE 9]>
		<script src="<?php echo JUri::root(true); ?>/media/jui/js/html5.js"></script>
	<![endif]-->
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/citrus.css" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
</head>

<body class="site <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	. ($params->get('fluidContainer') ? ' fluid' : '');
?>" style="border:none !important;background-image:url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/background.jpg)">

	<!-- Body -->

	<div class="body" style="position:relative;z-index:4;">
		<div class="container-fluid citrus-container">
		 <div class="row-fluid" style="z-index:2;margin-top:-3px;">
			<div class="span12 jumbotron0">
				<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/hamburger.jpg"  onclick="hideMenu()" alt="Custom image" id="hamburger1"/>
				<a href="<?php echo $this->baseurl; ?>"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/citruslogo.png" alt="Custom image" id="logo" /></a>
			<div class="full-screen-menu">
				<span><a href="#">About</a></span>
				<span><a class="white" href = "<?php echo $this->baseurl; ?>/index.php/contact-us">Contact</a></span>
				<span><a class="white" href = "<?php echo $this->baseurl; ?>/index.php/consumer-faq">Consumers</a></span>
				<span><a class="white" href = "<?php echo $this->baseurl; ?>/index.php/grower-information">Growers</a></span>
				<span><a class="white" href = "https://www.citrusgreening.org">Research</a></span>

				<span><a class="white" href = "<?php echo $this->baseurl; ?>/index.php/blog">Blog</a></span>
				<span><a class="white" href = "<?php echo $this->baseurl; ?>/index.php/news">News</a></span>			
		
			
			</div>

			</div>
		</div>
		<div class="row-fluid">
			<div class="span12 hiddenc" id="citrus-menu" >
				<div class = "navbar navbar" style="margin:0;border-radius:0px;width:100% !important">
					<div class = "navbar-inner" style="border-radius:0px;margin:0 !important;padding:0 !important">
							<div class = "nav-collapse in collapse" style="height:auto;" >
								<ul class = "nav navbar-nav toplist">
									<li class = "dropdown">
										<a class = "white dropdown-toggle" data-toggle = "dropdown" href = "#">About<i class = "caret"></i></a>
										<ul class = "dropdown-menu">
											<li><a class="white" href = "#">About Us</a></li>
											<li><a class="white" href = "#">Partners</a></li>
											<li><a class="white" href = "<?php echo $this->baseurl; ?>/index.php/contact-us">Contact</a></li>
											<li><a class="white" href = "https://twitter.com/citrusgreening">Twitter</a></li>
											<li><a class="white" href = "https://www.facebook.com/citrusgreening">Facebook</a></li>
										</ul>
									</li>
									<li class = "dropdown">
										<a class = "white dropdown-toggle" data-toggle = "dropdown" href = "#">Consumers<i class = "caret"></i></a>
										<ul class = "dropdown-menu">
											<li><a class="white" href = "<?php echo $this->baseurl; ?>/index.php/consumer-faq">FAQ</a></li>
										</ul>
									</li>
									<li class = "dropdown">
										<a class = "white dropdown-toggle" data-toggle = "dropdown" href = "#">Growers<i class = "caret"></i></a>
										<ul class = "dropdown-menu">
											<li><a class="white" href = "<?php echo $this->baseurl; ?>/index.php/grower-information">Information</a></li>
										</ul>
									</li>
									<li><a class="white" href = "https://www.citrusgreening.org">Research</a></li>


									<li><a class="white" href = "<?php echo $this->baseurl; ?>/index.php/blog">Blog</a></li>
									<li><a class="white" href = "<?php echo $this->baseurl; ?>/index.php/news">News</a></li>
								</ul>
							</div>
					</div>
				</div>
			</div>
		</div>
			<?php if ($this->countModules('position-1')) : ?>
				<nav class="navigation" role="navigation">
					<div class="navbar pull-left">
						<a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
					</div>
					<div class="nav-collapse">
						<jdoc:include type="modules" name="position-1" style="none" />
					</div>
				</nav>
			<?php endif; ?>
			<jdoc:include type="modules" name="banner" style="xhtml" />
			<div class="row-fluid">
				<?php if ($this->countModules('position-8')) : ?>
					<!-- Begin Sidebar -->
					<div id="sidebar" class="span3">
						<div class="sidebar-nav">
							<jdoc:include type="modules" name="position-8" style="xhtml" />
						</div>
					</div>
					<!-- End Sidebar -->
				<?php endif; ?>
				<main id="content" role="main" class="<?php echo $span; ?>">
					<!-- Begin Content -->
					<jdoc:include type="modules" name="position-3" style="xhtml" />
					<jdoc:include type="message" />
					<jdoc:include type="component" />
					<jdoc:include type="modules" name="position-2" style="none" />
					<!-- End Content -->
				</main>
				<?php if ($this->countModules('position-7')) : ?>
					<div id="aside" class="span3">
						<!-- Begin Right Sidebar -->
						<jdoc:include type="modules" name="position-7" style="well" />
						<!-- End Right Sidebar -->
					</div>
				<?php endif; ?>
			</div>
			<div class="row-fluid">
				<jdoc:include type="modules" name="top" style="xhtml" />
			</div>
		<div class="row-fluid" style="border-top:solid 1px;border-color:#000;padding:15px;box-sizing:border-box;background-color:#f0f0f0;">
		<div class="span4 citrus-solutions">
			<h4 class="footer-bold" style="margin-bottom:0px !important">Citrus Greening Solutions</h4>
			<div class="social-media">
				<span><a href="http://twitter.com/citrusgreening"><img src="images/cg/twitter.png"></a></span>
				<span><a href="http://facebook.com/citrusgreening"><img src="images/cg/facebook.png"></a></span>
				<span><a href="citrusgreening.xml"><img src="images/cg/rss.png"></a></span>
			</div>
			<p>We present a systems-based pipeline approach for delivering commercial, grove-deployable solutions using a novel therapeutic delivery strategy and citrus transgenics. </p>
		</div>

		<div class="span4" style="position: relative; text-align: center;">
			<h4 class="footer-bold">Funding Provided By:</h4>
			<a href="http://nifa.usda.gov/"><img style="width: 90%;max-width:220px;" src="images/cg/usda.png" alt="USDA" /></a>
		</div>

		<div class="span4" style="position: relative; text-align: center;">
			<h4 class="footer-bold">Hosting Provided By:</h4>
			<a href="http://bti.cornell.edu/"><img style="margin-top: 15px; width: 90%;max-width:220px;" src="images/cg/bti.png" alt="BTI" /></a>
		</div>
	</div>
		</div>
		
	</div>
	<!-- Footer -->
	<jdoc:include type="modules" name="debug" style="none" />

	<div class="background-box-outer">
		<div class="background-box-inner"></div>
	</div>
	<script>
function hideMenu(){
	if(document.getElementById('citrus-menu').className.indexOf('hidden')===-1){
		document.getElementById('citrus-menu').className='span-12 hiddenc';
	}
	else{
		document.getElementById('citrus-menu').className='span-12';
	}
}
</script>
</body>
</html>
