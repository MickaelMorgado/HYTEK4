<div class="col-xs-12">
	<div id="tabs" class="socialicons">
		<form id="searchform"
			action="apps/links/navbar-submit.php" 
			method="post"
			onsubmit="ajax($(this),event)">
			<div class="row">
				<div class="col-sm-9 col-md-8 col-lg-8">
					<div id="tabs">
						<ul id="autocomplete"></ul>
						<input 
							type="text" 
							name="link-add-url" 
							placeholder="Search [ ESC key ]" 
							title="press alt key to focus" 
							class="search fuzzy-search" 
							id="searchinput" 
							autocomplete="off"
							data-intro='This "search bar" enables you to go to your favorite bookmarks or simply search with ...'
							data-step="2"
						>
					</div>
				</div>
				<div class="col-sm-3 col-md-2 col-lg-2">
					<div class="toggles-search-buttons">
						<ul class="list-inline">
							<input 
								id="dynamic-method"
								type="hidden" 
								name="method" 
								value="google">
							<li>
								<input 
									type	=	"submit" 
									title 	= 	"google search (enter)" 
									value 	= 	"google" 
									class 	= 	"dock-icon sprite s1"
									id  	= 	"google-search"
									onclick = 	"$(location).attr('href', 'https://www.google.com/search?q='+$('#searchinput').val())" 
									data-intro='... Google or ...'
									data-step="3"
									>
								</input>
							</li><li>
								<input 
									type	= 	"submit" 
									title 	= 	"youtube search" 
									value 	= 	"youtube" 
									class 	= 	"dock-icon sprite s3"
									id  	= 	"youtube-search"
									onclick = 	"$(location).attr('href', 'https://www.youtube.com/results?search_query='+$('#searchinput').val())" 
									data-intro='... YouTube'
									data-step="4"
									>
								</input>
							</li><li>
								<input 
									type 	= 	"submit" 
									title 	= 	"add this link" 
									value 	= 	"add" 
									class 	= 	"dock-icon sprite s6"
									onclick = 	"$('#dynamic-method').val('add');" 
									data-intro='This button allow you add a link to your "bookmarks panel", just add a url in "search bar" and press this "add button"'
									data-step="5">
								</input>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-12 col-md-2 col-lg-2">
					<ul class="list-inline">
						<li><a href="http://gmail.com/">
							<span 	
								class 	= 	"dock-icon sprite s7" 
								title 	= 	"gmail"></span></a>
						</li>
						<li><a href="http://facebook.com">
							<span 	
								class 	= 	"dock-icon sprite s2" 
								title 	= 	"facebook"></span></a>
						</li>
						<li><a href="https://play.spotify.com/collection/songs/">
							<span 	
								class 	= 	"dock-icon sprite s5" 
								title 	= 	"spotify songs"></span></a>
						</li>
						<li><a href="http://twitter.com">
							<span 	
								class 	= 	"dock-icon sprite s4" 
								title 	= 	"twitter"></span></a>
						</li>
					</ul>
				</div>
			</div>
		</form>
		<div class="ajax-response"></div>
		<ul 
			class="list-unstyled scrollable list" 
			id="enableRefresh"
			data-intro='This is the "bookmarks panel" where you have all your favorites links'
			data-step="6"
			data-position="right"
			>
			<?php include('links/link-list.php'); ?>
		</ul>
	</div>
</div>
