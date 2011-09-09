<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		{block:Description}<meta name="description" content="{MetaDescription}" />{/block:Description}
        <meta name="color:Text" content="#333333" />
        <meta name="color:Links" content="#84968D" />
        <meta name="color:Headings" content="#84968D" />
        <meta name="color:PageBackground" content="#ecebe3" />
        <meta name="color:ModuleBackground" content="#fff" />
        
        <meta name="image:Background" content=""/>
        <meta name="if:Remove Background Image" content=""/>
        <meta name="if:Repeat Custom Background Image" content="1"/>
        <meta name="if:Make Background Fixed" content="0"/>
        <meta name="font:Body" content="Arial, Helvetica, sans-serif"/>
		<meta name="font:Title" content="Yanone Kaffeesatz, Arial, Helvetica Neue, sans-serif"/>
        <meta name="image:Title" content="" />
                
        <meta name="text:Twitter Username" content=""/>
		<meta name="text:Number Of Tweets" content="5"/>
		<meta name="if:One Navigation Item Per Line" content="0" />
        <meta name="text:Disqus Shortname" content="" />
        
        <meta name="if:Make Sidebar Fixed" content="0"/>
        <meta name="if:Show Likes" content="1" />
        <meta name="if:Show RSS Link" content="1" />
        <meta name="if:Show Archive Link" content="1" />
        <meta name="if:Show Likes Link" content="1" />
        <meta name="if:Show Random Link" content="1" />
        <meta name="text:Google Analytics Id" content=""/>

        <title>{Title}</title>
        <link rel="shortcut icon" href="{Favicon}" />
        <link rel="alternate" type="application/rss+xml" href="{RSS}" />
        <link rel="stylesheet" href="http://static.tumblr.com/xuyhsld/wOSlgz7g3/reset960.css" type="text/css"/>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" ></script>
		<script type="text/javascript" src="http://static.tumblr.com/xuyhsld/YIjlgz78s/jquery.jtweetsanywhere-1.2.1.min.js"></script>
		
		<style type="text/css">
			{block:IfBackgroundImage}
	          body {
	            background-image: url({image:Background});
				background-repeat:repeat;
				{block:IfNotRepeatCustomBackgroundImage}
	            background-repeat: no-repeat;
				{/block:IfNotRepeatCustomBackgroundImage}
	          }
	        {/block:IfBackgroundImage}
	        
	        {block:IfNotBackgroundImage}
	          body {
	            background-image: url("http://static.tumblr.com/xuyhsld/9Dzlgz7y3/bg_body.jpg");
	            background-repeat: no-repeat;
	          }  
	        {/block:IfNotBackgroundImage}
	        {block:IfRemoveBackgroundImage}
	        	body {
	        		background-image:none;
	        	}
	        {/block:IfRemoveBackgroundImage}
	        {block:IfMakeBackgroundFixed}
	        	body {
	        		background-attachment:fixed;
	        	}
	        {/block:IfMakeBackgroundFixed}
	        {block:IfOneNavigationItemPerLine}
	        	#navbar {margin-top:10px !important;}
	        	#navbar ul li {width:298px !important;float:none !important;}
	        {/block:IfOneNavigationItemPerLine}
		</style>
