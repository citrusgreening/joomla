<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php>echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="images/cg_logo_icon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="templates/citrusgreening/css/general.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<jdoc:include type="head" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />


</head>
<body>
<div class="container">
<div class="jumbotron">
<a href="http://irscstudentweb.org/~J13006325/joomla"><img src="images/logo.png" alt="logo" /></a>
<span id="socialmediacontainer">
<a href="https://twitter.com/citrusgreening"><img src="images/twitter.png" alt="Twitter"/></a>
<a href="https://www.facebook.com/citrusgreening"><img src="images/facebook.png" alt="Facebook"/></a>
</span>
</div>
<nav class="navbar navbar-inverse header" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" 
data-target="#example-navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand citrusname" href="#">Citrus Greening</a>
</div>
<div class="collapse navbar-collapse" id="example-navbar-collapse">
<ul class="nav navbar-nav">
<li><a href="http://irscstudentweb.org/~J13006325/joomla/" class="white">Home</a></li>
<li><a class="white" href="#">Contact</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle white" data-toggle="dropdown">
Research <b class="caret"></b>
</a>
<ul class="dropdown-menu">
<li><a href="#" class="white">Popular Press</a></li>
<!--<li class="divider"></li>-->
<li><a href="#" class="white">Publications</a></li>
<li><a href="#" class="white">Database</a></li>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle white" data-toggle="dropdown">
About <b class="caret"></b>
</a>
<ul class="dropdown-menu">
<li><a href="#" class="white">Partners</a></li>
<!--<li class="divider"></li>-->
<li><a href="#" class="white">Mission</a></li>
</ul>
</li>
<li><a class="white" href="#">News</a></li>
<li><a class="white" href="#">Resources</a></li>
<li><a class="white" href="http://irscstudentweb.org/~J13006325/joomla/index.php/citrus-greening-blog">Blog</a></li>
</ul>
</div>
</nav>
<jdoc:include type="component" />
<div class="col-md-12 footer">
<ul class="nav navbar-nav bottomlist">
<li class="bottomli"><a class="white" href="#">Home</a></li>
<li class="bottomli"><a class="white" href="#">Links</a></li>
<li class="bottomli"><a class="white" href="#">Research</a></li>
<li class="bottomli"><a class="white" href="#">Partners</a></li>
<li class="bottomli"><a class="white" href="#">Contact Us</a></li>
</ul>
</div>
</div>
<script>
function removejscssfile(filename, filetype){
	var targetelement=(filetype=="js")? "script" : (filetype=="css")? "link" : "none"; //determine element type to create nodelist from
	var targetattr=(filetype=="js")? "src" : (filetype=="css")? "href" : "none"; //determine corresponding attribute to test for
	var allsuspects=document.getElementsByTagName(targetelement);
	for (var i=allsuspects.length; i>=0; i--){ //search backwards within nodelist for matching elements to remove
	if (allsuspects[i] && allsuspects[i].getAttribute(targetattr)!=null && allsuspects[i].getAttribute(targetattr).indexOf(filename)!=-1)
		allsuspects[i].parentNode.removeChild(allsuspects[i]); //remove element by calling parentNode.removeChild()
	}
}

removejscssfile("/~J13006325/joomla/media/jui/js/bootstrap.min.js", "js"); //remove all occurences of "somescript.js" on page
</script>
</body>

</html>