<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>jQuery UI Autocomplete - Multiple values</title>
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"/> 
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script>
		$(function() {
			var availableTags = ["jQuery.com", "jQueryUI.com", "jQueryMobile.com", "jQueryScript.net", "jQuery", "Free jQuery Plugins"];
			var minWordLength = 2;
			function split(val) {
				return val.split(' ');
			}
		
			function extractLast(term) {
				return split(term).pop();
			}
			$("#tags")
			// don't navigate away from the field on tab when selecting an item
			.bind("keydown", function(event) {
				if (event.keyCode === $.ui.keyCode.TAB && $(this).data("ui-autocomplete").menu.active) {
					event.preventDefault();
				}
			}).autocomplete({
				minLength: minWordLength,
				source: function(request, response) {
					// delegate back to autocomplete, but extract the last term
					var term = extractLast(request.term);
					if(term.length >= minWordLength){
						response($.ui.autocomplete.filter( availableTags, term ));
					}
				},
				focus: function() {
					// prevent value inserted on focus
					return false;
				},
				select: function(event, ui) {
					var terms = split(this.value);
					// remove the current input
					terms.pop();
					// add the selected item
					terms.push(ui.item.value);
					// add placeholder to get the comma-and-space at the end
					terms.push("");
					this.value = terms.join(" ");
					return false;
				}
			});
		});
    </script>
	<style>
		.header{
			width: 50%;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 50px;
		}
		.textarea_container{
			width: 50%;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 50px;
		}
		textarea{
			width: 100%;
			height: 100px;
		}
		pre{
			border: dotted 2px #2e39cf;
		}
	</style>
</head>

<body>
<div id="jquery-script-menu">
<div class="jquery-script-center">
<!--<ul>
<li><a href="http://www.jqueryscript.net/form/Simple-jQuery-jQuery-UI-Autocomplete-Plugin-For-Textareas.html">Download This Plugin</a></li>
<li><a href="http://www.jqueryscript.net/">Back To jQueryScript.Net</a></li>
</ul>-->
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
	<div class="header" style="margin-top:150px;">
		All this does is allows you to query each word being typed into a textarea against a list of words in an array. The CSS has not been tweaked or customised in any way, so styling will need to be perfected. The sections in red are all that were changed to get this working.
	</div>
	<div class="textarea_container ui-widget">
		<textarea id="tags"></textarea>
	</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>