<div id ="content" class="row">
	<article class="large-7 columns">
		<h2 class="text-center">$Title</h2>
		<% if $URLSegment == 'contact' %>
		<h3 class="contactInfo text-center">145 Iowa memorial Union </br> <a href="mailto:cab@uiowa.edu">cab@uiowa.edu</a></h3> <% end_if %>
		$Content
		$Form
	</article>
	<div class="large-5 columns">
		<% include SocialMediaButtons %>
		<% include TwitterWidget %>
	</div>
</div>
<% include NextTiles %>