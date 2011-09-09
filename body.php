</head><body>
	<div id="wrapper" class="container_12">
		<div id="container">
			<div id="ltCol" class="grid_8">
			    <div id="header">
					<h1 id="siteLogo" >
						{block:IfTitleImage}
						<a id="pageTitleImage" href="/" title="{Title}" ><img alt="{Title}" src="{image:Title}" />  </a>
						{/block:IfTitleImage}
						{block:IfNotTitleImage}
						<a id="pageTitleText" href="/">{Title}</a>
						{/block:IfNotTitleImage}
						<div class="clear"></div>
					</h1>
				</div>
				<div id="mainContent">
					<ol id="posts">
						{block:NoSearchResults}
							<li class="post text">
								Sorry, No posts match your search - {SearchQuery}. Please revist or rephrase your search term. 
							</li> 
						{/block:NoSearchResults}
	
						{block:SearchPage}
							<li class="post text">
								Your query - {SearchQuery} returned {SearchResultCount} results.
							</li>
						{/block:SearchPage}
						
						{block:Posts}
							<li class="post">
							  	{block:Quote}
							  	<div class="quote">
			                    	<div class="quoteWrapper">
			                        "{Quote}"
									</div>
			                        {block:Source}
			                            <div class="source">{Source}</div>
			                        {/block:Source}
							  	</div> <!-- END QUOTE -->
							  	{/block:Quote} 
							  	
							  	{block:Text}
							  	<div class="text">
								  	<h3 class="postHeader"><a href="{Permalink}">{Title}</a></h3>
			                        
									<div class="postContent">{Body}</div>	
							  	</div> <!-- END TEXT -->
							  	{/block:Text}
								{block:Photo}
								<div class="photo">
									<div class="photoWrapper">
										{LinkOpenTag}<img src="{PhotoURL-500}" alt="{PhotoAlt}" title="{PhotoAlt}"/>{LinkCloseTag}
									</div>
									<div class="caption">{block:Caption}{Caption}{/block:Caption}</div>
								</div> <!-- END PHOTO -->
								{/block:Photo}
								
								{block:Photoset}
								<div class="photoset">
									<div class="photosetWrapper">
										{Photoset-500}
									</div>
									<div class="caption">{block:Caption}{Caption}{/block:Caption}</div>
								</div> <!-- END PHOTOSET -->
								{/block:Photoset}
								{block:Link}
								<div class="link">
									<h3 class="postHeader"><span class="linkRacquo">&raquo; &nbsp;</span><a href="{URL}" class="linkHeader" {Target}>{Name}</a></h3>
			                        {block:Description}
			                            <div class="description">{Description}</div>
			                        {/block:Description}
								</div> <!-- END LINK -->
								{/block:Link}

								{block:Chat}
								<div class="chat">
									{block:Title}
			                        <h3 class="postHeader"><a href="{Permalink}">{Title}</a></h3>
			                        {/block:Title}
			                        
			                        <ul class="chat">
			                            {block:Lines}
			                                <li class="{Alt} user_{UserNumber}">
			                                    {block:Label}
			                                        <span class="label">{Label}</span>
			                                    {/block:Label}
			
			                                    {Line}
			                                </li>
			                            {/block:Lines}
			                        </ul>
								</div> <!-- END CHAT -->
								{/block:Chat}
								{block:Video}
								<div class="video">
									<div class="videoWrapper">{Video-500}</div>
				                     <div class="caption">{block:Caption}{Caption}{/block:Caption}</div>
								</div> <!-- END VIDEO -->	
								{/block:Video}
								
								{block:Audio}
								<div class="audio">
									<div class="audioWrapper clearfix">
										<div class="audioAlbumArt grid_2 alpha omega">
											{block:AlbumArt}
											 <img src="{AlbumArtURL}" width="150" height="150" alt="Album Art" />
											{/block:AlbumArt}
										</div>
										<div class="audioRtCol grid_5 omega">
											{AudioPlayerBlack}
											{block:Caption}
												<div class="caption">{Caption}</div>
											{/block:Caption}
											<div class="audioExtras">
												{block:TrackName}
												<div class="audioExtrasTrack audioExtrasUnit"><div class="audioExtrasHeader">Title</div><div class="audioExtrasContent">{TrackName}</div></div>
												{/block:TrackName}

												{block:Artist}
												<div class="audioExtrasArtist audioExtrasUnit"><div class="audioExtrasHeader">Artist</div><div class="audioExtrasContent">{Artist}</div></div>
												{/block:Artist}	

												{block:Album}
												<div class="audioExtrasAlbum audioExtrasUnit"><div class="audioExtrasHeader">Album</div><div class="audioExtrasContent" > {Album} </div></div>
												{/block:Album}
											</div>
										</div>
									</div> <!-- End of Audio Wrapper -->
								</div> <!-- END AUDIO -->
								{/block:Audio}
								{block:Answer}
								<div class="ask">
									<div class="postContent">
									    <div class="askQuestion">
				                        {Question}
				                        </div>
	                      				<div class="caption clearfix">
	                      					<div class="askerPorLink">{asker}</div>
	                      					<img class="askerPorImg" src="{AskerPortraitURL-24}" width="24" height="24" alt=""/>
	                      				</div>
	
				                        <div class="askAnswer">
				                        {Answer}
				                        </div>
									</div>
								</div> <!-- END ASK -->
								{/block:Answer}

		                        {block:Date}
								<div class="postMetadata">
									<ul class="metaDropdown clearfix">
										{block:NotReblog}<li class="postTimeStamp">{TimeAgo}</li>{block:NotReblog}
										{block:NoteCount}<li class="postComments"><a href="{Permalink}#notes">{NoteCountWithLabel}</a></li>{/block:NoteCount}
										{block:IfDisqusShortname}<li class="postDisqus"><a class="dsq-comment-count" href="{Permalink}#disqus_thread">{lang:View comments}</a></li>{/block:IfDisqusShortname}
										<li class="postDetails">
											<a title="Reblog, Share on Facebook, Twitter" href="#">{lang:Share this}</a>
											<ul class="flyout">
												<li><a href="{Permalink}" target="_blank">Reblog</a></li>
												<li><a href="http://www.facebook.com/sharer.php?u={Permalink}{block:Title}&t={Title}{/block:Title}" target="_blank">Facebook</a></li>
												<li><a href="http://twitter.com/share?url={Permalink}{block:Title}&text={Title}{/block:Title}" target="_blank">Twitter</a></li>
												<li class="shortURL"><input type="text" value="{ShortURL}"></input></li>
											</ul>
										</li>
										<!-- {block:Photo}{block:HighRes}<li class="postTimeStamp"><a href="{PhotoURL-HighRes}">{lang:High-res}</a></li>{/block:HighRes}{/block:Photo} -->									
									 </ul>
								</div> <!--  END POSTMETA -->
								{/block:Date}
								
								<div class="reblogSource clearfix" style="display:none; {block:Reblog}display:block;{/block:Reblog} {block:ContentSource} display:block; {/block:ContentSource}" >
									<div class="reblogInfo">
										{block:Reblog}
		                                {lang:Reblogged TimeAgo from ReblogParentName} {block:RebloggedFromReblog}(<span style="text-transform:lowercase;">{lang:Originally from ReblogRootName}</span>){/block:RebloggedFromReblog}
		                                {/block:Reblog}
									</div>
	                                
	                                <div class="sourceInfo">
	                                    {block:ContentSource}
			                            {lang:Source}:
			                            <a href="{SourceURL}" class="source_url">
			                                {block:SourceLogo}<img src="{BlackLogoURL}" width="{LogoWidth}" height="{LogoHeight}" alt="{SourceTitle}" />{/block:SourceLogo}
			                                {block:NoSourceLogo}{SourceTitle}{/block:NoSourceLogo}
			                            </a>
				                        {/block:ContentSource}
	                                </div>
								</div>

								{block:HasTags}
								<div class="tags">
									<ul class="tag-list">
										{block:Tags}<li><a href="{TagURL}">#{Tag}</a></li>{/block:Tags}
									</ul>
								</div> <!-- END TAGS -->
								{/block:HasTags}
		                    </li> <!-- END POST -->
						{/block:Posts}
					</ol> <!-- END ALL POSTS -->
					<!-- PERMALINK PAGES -->				
					{block:PostNotes}
					<div id="notes" class="notesCon">
						<h3>{lang:Notes}</h3>
						{PostNotes}
					</div>			
					{/block:PostNotes}
					{block:IfDisqusShortname}
                        {block:Permalink}
                            <div class="notesCon" >
                                <div id="disqus_thread"></div>
                                <script type="text/javascript" src="http://disqus.com/forums/{text:Disqus Shortname}/embed.js"></script>
                                <noscript><a href="http://{text:Disqus Shortname}.disqus.com/?url=ref">{lang:View the discussion thread}</a></noscript>
                            </div>
                            <div style="text-align:right;">
                                {lang:Blog comments powered by Disqus 2}
                            </div>
                        {/block:Permalink}
                    {/block:IfDisqusShortname}
                    <!-- END PERMALINK PAGES -->
				</div>
			</div> <!-- END LTCOL -->
			
			<div id="rtCol" class="grid_4">
				<div id="navbar">
					<ul class="clearfix">
					    <li class="homeMenu" ><a href="/" title="{lang:Home}" alt="{lang:Home}">{lang:Home}</a></li>
					    {block:AskEnabled}<li class="askMenu"><a href="/ask">{AskLabel}</a></li>{/block:AskEnabled}
						{block:SubmissionsEnabled}<li class="submitMenu"><a href="/submit">{SubmitLabel}</a></li>{/block:SubmissionsEnabled}
	   				    {block:IfShowRandomLink}<li><a href="/random">{lang:Random}</a></li>{/block:IfShowRandomLink}
					    {block:IfShowLikesLink}<li><a href="/liked/by/{Name}"  target="_blank">{lang:Likes}</a></li>{/block:IfShowLikesLink}
					    {block:IfShowArchiveLink}<li class="archiveMenu"><a href="/archive">{lang:Archive}</a></li>{/block:IfShowArchiveLink}
					    {block:IfShowRSSLink}<li class="rssMenu"><a href="{RSS}" target="_blank">{lang:RSS}</a></li>{/block:IfShowRSSLink}
					    {block:HasPages}
						    {block:Pages}<li><a href="{URL}">{Label}</a></li>{/block:Pages}
					    {/block:HasPages}
					</ul>
				</div> <!-- END NAVBAR -->
				
				<form action="/search" method="get" id="searchForm">
				    <input class="textbox" type="text" name="q" value="{SearchQuery}"/>
				    <input class="submitButton" type="submit" value="{lang:Search}"/>
				</form>
				
				<div id="aboutBlock" class="sidebarBlock">
					<h3>{lang:About me}</h3>
					
					<img src="{PortraitURL-128}" class="aboutPortrait" />
		            {block:Description}
			        <p id="description">{Description}</p>
			        {/block:Description}
		            <div class="clear"></div>
				</div>
				<!-- TWITTER BLOCK --> 
				{block:IfTwitterUsername}
				<div id="twitterBlock" class="sidebarBlock">
			        <h3>{lang:Tweets}</h3>
			        <div id="tweets"></div>
			        <div id="followTwitter"><a class="notesButton" target="_blank" href="http://twitter.com/{text:Twitter Username}">{lang:Follow on Twitter}</a></div>
				</div>
				<script>
				$('#tweets').jTweetsAnywhere({
				    username: '{text:Twitter Username}',
				    count: {text:Number Of Tweets}
				});
				</script>
	 			{/block:ifTwitterUsername}

				{block:ifShowLikes}
				{block:Likes} 
				<div id="likeBlock" class="sidebarBlock">
					<h3>{lang:Likes}</h3>
					{Likes limit="5" width="258" summarize="100" }	
				</div>
				{/block:Likes}	
				{/block:ifShowLikes}

			</div> <!-- END RTCOL -->
			<div class="clear"></div>
		</div>
	</div>
	<div id="footer">
	   <div id="footerWrapper" class="container_12">
			<div id="nextPrevButtons" class="grid_12">
	            {block:PreviousPage}
				<a href="{PreviousPage}" class="footerPreviousButton footerButton">{lang:Newer}</a>
	            {/block:PreviousPage}
	
	            {block:NextPage}
	            <a href="{NextPage}" class="footerNextButton footerButton">{lang:Older}	</a>
				{/block:NextPage}

				{block:PermalinkPagination} 
	            {block:NextPost}
	            <a href="{NextPost}" class="footerPreviousButton footerButton">{lang:Prev post}</a>
				{/block:NextPost}
	            {block:PreviousPost} 
				<a href="{PreviousPost}" class="footerNextButton footerButton">{lang:Next post}</a>
	            {/block:PreviousPost}
				{/block:PermalinkPagination}

				<div class="pageInfo">
					<ul id="footerNav" class="clearfix">
						<li id="footerNavHome"><a href="/" title="{AskLabel}">{lang:Home}</a></li>
						{block:IfShowArchiveLink}<li id="footerNavArchive"><a title="{lang:Archive}" href="/archive">{lang:Archive}</a></li>{block:IfShowArchiveLink}
						{block:AskEnabled}<li id="footerNavAsk"><a title="{AskLabel}" href="/ask">{AskLabel}</a></li>{/block:AskEnabled}
						{block:SubmissionsEnabled}<li id="footerNavSubmit"><a title="{SubmitLabel}" href="/submit">{SubmitLabel}</a></li>{/block:SubmissionsEnabled}
						{block:IfShowRSSLink}<li id="footerNavRSS"><a title="{lang:RSS}" href="{RSS}"  target="_blank">{lang:RSS}</a></li>{/block:IfShowRSSLink}
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<div id="footerAttrib" class="grid_12 ">
				<ul class="clearfix">
					<li class=""><a href="http://www.tumblr.com/theme/28127">{lang:Install this theme}</a></li>
					<li class=""><a href="http://dejoe.tumblr.com/">by Dejoe </li>
				</ul>
			</div>
			<div class="clear"></div>
	   </div>
	</div>
	
	<!-- SiteSpecific JS Includes -->
    {block:IfMakeSidebarFixed}
    <script>
    	$(document).ready(function(){
    		$("#rtCol").makeMeFixed();
    	});
    </script>
    {/block:IfMakeSidebarFixed}
		<!-- Global JS Includes  -->
	 
	 {block:IfGoogleAnalyticsId}
	 <script>	
		/*Google Analytics*/
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', '{text:Google Analytics Id}']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	  </script>
	 {/block:IfGoogleAnalyticsId}
	 {block:IfDisqusShortname}
     <script type="text/javascript">
            //<![CDATA[
            (function() {
                var links = document.getElementsByTagName('a');
                var query = '?';
                for(var i = 0; i < links.length; i++) {
                    if(links[i].href.indexOf('#disqus_thread') >= 0) {
                        query += 'url' + i + '=' + encodeURIComponent(links[i].href) + '&';
                    }
                }
                document.write('<script charset="utf-8" type="text/javascript" src="http://disqus.com/forums/{text:Disqus Shortname}/get_num_replies.js' + query + '"></' + 'script>');
            })();
            //]]>
     </script>
     {/block:IfDisqusShortname}
</body>
</html>