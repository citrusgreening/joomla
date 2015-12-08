<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<?php JHtml::_('script', 'system/core.js', false, true);?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php>echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<title>Citrus Greening Research</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="images/cg_logo_icon.png">

<link rel="stylesheet" href="templates/citrusblank/css/template.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>



<script src="/~J13006325/joomla/media/system/js/core.js" type="text/javascript"></script>
<script src="/~J13006325/joomla/media/system/js/punycode.js" type="text/javascript"></script>

<script src="/~J13006325/joomla/media/system/js/frontediting.js" type="text/javascript"></script>

<script src="/~J13006325/joomla/media/editors/tinymce/tinymce.min.js" type="text/javascript"></script>
<script src="/~J13006325/joomla/media/system/js/html5fallback.js" type="text/javascript"></script>
<script src="/~J13006325/joomla/media/jui/js/ajax-chosen.min.js" type="text/javascript"></script>





  <script type="text/javascript">
window.setInterval(function(){var r;try{r=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP")}catch(e){}if(r){r.open("GET","./",true);r.send(null)}},840000);
Calendar._DN = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"]; Calendar._SDN = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat","Sun"]; Calendar._FD = 0; Calendar._MN = ["January","February","March","April","May","June","July","August","September","October","November","December"]; Calendar._SMN = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]; Calendar._TT = {"INFO":"About the Calendar","ABOUT":"DHTML Date\/Time Selector\n(c) dynarch.com 2002-2005 \/ Author: Mihai Bazon\nFor latest version visit: http:\/\/www.dynarch.com\/projects\/calendar\/\nDistributed under GNU LGPL.  See http:\/\/gnu.org\/licenses\/lgpl.html for details.\n\nDate selection:\n- Use the \u00ab and \u00bb buttons to select year\n- Use the < and > buttons to select month\n- Hold mouse button on any of the buttons above for faster selection.","ABOUT_TIME":"\n\nTime selection:\n- Click on any of the time parts to increase it\n- or Shift-click to decrease it\n- or click and drag for faster selection.","PREV_YEAR":"Click to move to the previous year. Click and hold for a list of years.","PREV_MONTH":"Click to move to the previous month. Click and hold for a list of the months.","GO_TODAY":"Go to today","NEXT_MONTH":"Click to move to the next month. Click and hold for a list of the months.","SEL_DATE":"Select a date.","DRAG_TO_MOVE":"Drag to move","PART_TODAY":" Today ","DAY_FIRST":"Display %s first","WEEKEND":"0,6","CLOSE":"Close","TODAY":"Today","TIME_PART":"(Shift-)Click or Drag to change the value.","DEF_DATE_FORMAT":"%Y-%m-%d","TT_DATE_FORMAT":"%a, %b %e","WK":"wk","TIME":"Time:"};
				jQuery(document).ready(function (){
					jQuery('select').chosen({"disable_search_threshold":10,"allow_single_deselect":true,"placeholder_text_multiple":"Select some options","placeholder_text_single":"Select an option","no_results_text":"No results match"});
				});
			
		jQuery(function($) {
			SqueezeBox.initialize({});
			SqueezeBox.assign($('a.modal_jform_contenthistory').get(), {
				parse: 'rel'
			});
		});
		function jModalClose() {
			SqueezeBox.close();
		}
	Joomla.submitbutton = function(task)
	{
		if (task == 'article.cancel' || document.formvalidator.isValid(document.getElementById('adminForm')))
		{
			if (tinyMCE.get("jform_articletext").isHidden()) {tinyMCE.get("jform_articletext").show()};
			Joomla.submitform(task);
		}
	}

		jQuery(function($) {
			SqueezeBox.initialize({});
			SqueezeBox.assign($('button.modal_jform_contenthistory').get(), {
				parse: 'rel'
			});
		});
		function jModalClose() {
			SqueezeBox.close();
		}
jQuery(document).ready(function(){
	jQuery('.hasTooltip').tooltip({"html": true,"container": "body"});
});
			function jInsertEditorText( text, editor )
			{
				tinyMCE.execCommand('mceInsertContent', false, text);
			}
			
		function jSelectArticle(id, title, catid, object, link, lang)
		{
			var hreflang = '';
			if (lang !== '')
			{
				var hreflang = ' hreflang = "' + lang + '"';
			}
			var tag = '<a' + hreflang + ' href="' + link + '">' + title + '</a>';
			jInsertEditorText(tag, 'jform_articletext');
			jModalClose();
		}
		jQuery(function($) {
			SqueezeBox.initialize({});
			SqueezeBox.assign($('a.modal').get(), {
				parse: 'rel'
			});
		});
		function jModalClose() {
			SqueezeBox.close();
		}
			function insertReadmore(editor)
			{
				var content = tinyMCE.activeEditor.getContent();
				if (content.match(/<hr\s+id=("|')system-readmore("|')\s*\/*>/i))
				{
					alert('There is already a Read more ... link that has been inserted. Only one link is permitted. Use {pagebreak} to split the page up further.');
					return false;
				} else {
					jInsertEditorText('<hr id="system-readmore" />', editor);
				}
			}
			
		jQuery(function($) {
			SqueezeBox.initialize({});
			SqueezeBox.assign($('a.modal-button').get(), {
				parse: 'rel'
			});
		});
		function jModalClose() {
			SqueezeBox.close();
		}
				jQuery(document).ready(function (){
					jQuery('#jform_tags').chosen({"disable_search_threshold":10,"allow_single_deselect":true,"placeholder_text_multiple":"Select some options","placeholder_text_single":"Select an option","no_results_text":"No results match"});
				});
			
				(function($){
					$(document).ready(function () {
						$('#jform_tags').ajaxChosen({
							type: 'GET',
							url: 'http://irscstudentweb.org/~J13006325/joomla/index.php?option=com_tags&task=tags.searchAjax',
							dataType: 'json',
							jsonTermKey: 'like',
							afterTypeDelay: '500',
							minTermLength: '3'
						}, function (data) {
							var results = [];

							$.each(data, function (i, val) {
								results.push({ value: val.value, text: val.text });
							});

							return results;
						});
					});
				})(jQuery);
				
				(function($){
					$(document).ready(function () {

						var customTagPrefix = '#new#';

						// Method to add tags pressing enter
						$('#jform_tags_chzn input').keyup(function(event) {

							// Tag is greater than the minimum required chars and enter pressed
							if (this.value && this.value.length >= 3 && (event.which === 13 || event.which === 188)) {

								// Search an highlighted result
								var highlighted = $('#jform_tags_chzn').find('li.active-result.highlighted').first();

								// Add the highlighted option
								if (event.which === 13 && highlighted.text() !== '')
								{
									// Extra check. If we have added a custom tag with this text remove it
									var customOptionValue = customTagPrefix + highlighted.text();
									$('#jform_tags option').filter(function () { return $(this).val() == customOptionValue; }).remove();

									// Select the highlighted result
									var tagOption = $('#jform_tags option').filter(function () { return $(this).html() == highlighted.text(); });
									tagOption.attr('selected', 'selected');
								}
								// Add the custom tag option
								else
								{
									var customTag = this.value;

									// Extra check. Search if the custom tag already exists (typed faster than AJAX ready)
									var tagOption = $('#jform_tags option').filter(function () { return $(this).html() == customTag; });
									if (tagOption.text() !== '')
									{
										tagOption.attr('selected', 'selected');
									}
									else
									{
										var option = $('<option>');
										option.text(this.value).val(customTagPrefix + this.value);
										option.attr('selected','selected');

										// Append the option an repopulate the chosen field
										$('#jform_tags').append(option);
									}
								}

								this.value = '';
								$('#jform_tags').trigger('liszt:updated');
								event.preventDefault();

							}
						});
					});
				})(jQuery);
				
jQuery(document).ready(function($) {Calendar.setup({
			// Id of the input field
			inputField: "jform_publish_up",
			// Format of the input field
			ifFormat: "%Y-%m-%d %H:%M:%S",
			// Trigger for the calendar (button ID)
			button: "jform_publish_up_img",
			// Alignment (defaults to "Bl")
			align: "Tl",
			singleClick: true,
			firstDay: 0
			});});
jQuery(document).ready(function($) {Calendar.setup({
			// Id of the input field
			inputField: "jform_publish_down",
			// Format of the input field
			ifFormat: "%Y-%m-%d %H:%M:%S",
			// Trigger for the calendar (button ID)
			button: "jform_publish_down_img",
			// Alignment (defaults to "Bl")
			align: "Tl",
			singleClick: true,
			firstDay: 0
			});});
  </script>
  <script type="text/javascript">
    (function() {
      Joomla.JText.load({"JLIB_FORM_FIELD_INVALID":"Invalid field:&#160","JGLOBAL_KEEP_TYPING":"Keep typing ...","JGLOBAL_LOOKING_FOR":"Looking for"});
    })();
  </script>
  <script type="text/javascript" src="http://irscstudentweb.org/~J13006325/joomla/media/editors/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
				tinyMCE.init({
					// General
					directionality: "ltr",
					language : "en",
					mode : "specific_textareas",
					autosave_restore_when_empty: false,
					skin : "lightgray",
					theme : "modern",
					schema: "html5",
					selector: "textarea.mce_editable",
					// Cleanup/Output
					inline_styles : true,
					gecko_spellcheck : true,
					entity_encoding : "raw",
					valid_elements : "",
					extended_valid_elements : "hr[id|title|alt|class|width|size|noshade]",
					force_br_newlines : false, force_p_newlines : true, forced_root_block : 'p',
					toolbar_items_size: "small",
					invalid_elements : "script",
					// Plugins
					plugins : "autolink,lists,image,charmap,print,preview,anchor,pagebreak,code,save,textcolor,colorpicker,importcss,searchreplace,insertdatetime,link,fullscreen,table,emoticons,media,hr,directionality,paste,visualchars,visualblocks,nonbreaking,template,print,wordcount,advlist,autosave,contextmenu",
					// Toolbar
					toolbar1: "bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect | formatselect fontselect fontsizeselect",
					toolbar2: "searchreplace | bullist numlist | outdent indent | undo redo | link unlink anchor image | code | forecolor,backcolor | fullscreen",
					toolbar3: "table | subscript superscript | charmap emoticons media hr ltr rtl",
					toolbar4: "inserttime cut copy paste | visualchars visualblocks nonbreaking blockquote template | print preview",
					removed_menuitems: "newdocument",
					// URL
					relative_urls : true,
					remove_script_host : false,
					document_base_url : "http://irscstudentweb.org/~J13006325/joomla/",
					rel_list : [
						{title: 'Alternate', value: 'alternate'},
						{title: 'Author', value: 'author'},
						{title: 'Bookmark', value: 'bookmark'},
						{title: 'Help', value: 'help'},
						{title: 'License', value: 'license'},
						{title: 'Lightbox', value: 'lightbox'},
						{title: 'Next', value: 'next'},
						{title: 'No Follow', value: 'nofollow'},
						{title: 'No Referrer', value: 'noreferrer'},
						{title: 'Prefetch', value: 'prefetch'},
						{title: 'Prev', value: 'prev'},
						{title: 'Search', value: 'search'},
						{title: 'Tag', value: 'tag'}
					],
					//Templates
					templates: [{title: 'Layout', description: 'HTML layout.', url:'http://irscstudentweb.org/~J13006325/joomla/media/editors/tinymce/templates/layout1.html'},{title: 'Simple Snippet', description: 'Simple HTML snippet.', url:'http://irscstudentweb.org/~J13006325/joomla/media/editors/tinymce/templates/snippet1.html'},],
					// Layout
					content_css : "http://irscstudentweb.org/~J13006325/joomla/templates/system/css/editor.css",
					importcss_append: true,
					// Advanced Options
					resize: "both",
					image_advtab: true,
					height : "550",
					width : "",

				});
				</script>
  
  
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />


</head>
<body>

<div class="container">
<div class="jumbotron">
<a href="http://irscstudentweb.org/~J13006325/joomla"><img id="citruslogo" src="images/logo2.jpg" alt="logo" /></a>
<!--<div style="position:relative;width:370px; display:inline-block;font-size:.8em;line-height:12px;top:5px;">We present a systems-based pipeline approach for delivering commercial, grove-deployable solutions using a novel therapeutic delivery strategy and citrus transgenics. </div>-->
<div id="socialmediacontainer">
<a href="https://twitter.com/citrusgreening"><img class="twitter" src="images/twitter.png" alt="Twitter"/></a>
<a href="https://www.facebook.com/citrusgreening"><img src="images/facebook.png" alt="Facebook"/></a>
</div>
</div>

<div class = "navbar navbar-inverse" style="margin:0;border-radius:0px;width:100% !important">
	<div class = "navbar-inner" style="border-radius:0px;margin:0 !important;padding:0 !important">
			<a  class = "btn btn-navbar" data-toggle = "collapse" data-target = ".nav-collapse">
				<i class = "icon-tasks"></i>
			</a>
			<a href = "#" class = "brand citrusname">Citrus Greening</a>
			<div class = "nav-collapse collapse" >
				<ul class = "nav navbar-nav toplist">
					<li><a class="white" href = "http://irscstudentweb.org/~J13006325/joomla/">Home</a></li>
					<li><a class="white" href = "index.php?option=com_contact&view=categories&id=0">Contact</a></li>
					<li class = "dropdown">
						<a class = "white dropdown-toggle" data-toggle = "dropdown" href = "#">Research <i class = "caret"></i></a>
						<ul class = "dropdown-menu">
							<li><a class="white" href = "#">Popular Press</a></li>
							<li><a class="white" href = "#">Publicatons</a></li>
							<li><a class="white" href = "#">Database</a></li>
						</ul>
					</li>
					<li class = "dropdown">
						<a class = "white dropdown-toggle" data-toggle = "dropdown" href = "#">About <i class = "caret"></i></a>
						<ul class = "dropdown-menu">
							<li><a class="white" href = "#">Partners</a></li>
							<li><a class="white" href = "#">Mission</a></li>
						</ul>
					</li>
					<li><a class="white" href = "http://irscstudentweb.org/~J13006325/joomla/index.php/news">News</a></li>
					<li><a class="white" href = "#">Resources</a></li>
					<li><a class="white" href = "http://irscstudentweb.org/~J13006325/joomla/index.php/citrus-blog">Blog</a></li>
				</ul>
			</div>
	</div>
</div>
<jdoc:include type="component" />
<jdoc:include type="modules" name="top" style="xhtml" />
<div class="col-md-12 footer">
<ul class="nav navbar-nav bottomlist">
<li class="bottomli"><a class="white" href="http://irscstudentweb.org/~J13006325/joomla">Home</a></li>
<li class="bottomli"><a class="white" href="index.php?option=com_content&amp;view=article&amp;id=42&amp;catid=2&amp;Itemid=101">Links</a></li>
<li class="bottomli"><a class="white" href="#">Research</a></li>
<li class="bottomli"><a class="white" href="#">Partners</a></li>
<li class="bottomli"><a class="white" href="index.php?option=com_contact&view=categories&id=0">Contact Us</a></li>
</ul>
</div>
</div>
</body>
</html>