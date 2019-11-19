<li>
    <a href="{$Link}" class="image-container b-lazy $Image.Orientation" data-src="$Image.URL" style="background-image: data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==; text-indent: -9999px;">$Title</a>
    <h3 class="event-title"><a href="{$Link}">$Title.LimitCharacters(50)</a></h3>
    <p class="date-location">
        <span class="next-date-time">
        	<% loop $Dates.Limit(1) %>
				<% include UiCalendarDateShortNoLinks %>
			<% end_loop %>
		</span> 
		<span class="location"><% if $Location %>at {$Location}, <% end_if %><% if $Venue.Title %> $Venue.Title<% end_if %> <% if $DateTimeCount > "1" %><a href="$Link">(more times)</a><% end_if %></span>

        <% if $FacebookEventLink %><a href="$ParsedFacebookEventLink" class="facebook" target="_blank">Facebook Event</a><% end_if %>
    </p>
</li>