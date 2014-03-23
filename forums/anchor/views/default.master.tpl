<!doctype html>
<html lang="ru">
    <head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    	<title>Форумы Anchor</title>
    	<meta name="description" content="Anchor это очень простая и лёгкая система для блога, создана, чтобы просто писать.">
    
    	<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0">
    	
    	<link rel="stylesheet" href="/assets/css/main.css">
        <link rel="stylesheet" href="/assets/css/css/main.css">
    	<link rel="stylesheet" href="/assets/css/forum.css">
    	
    	<meta name='yandex-verification' content='5a27c3a83935ea6b' />
    			
		<link rel="stylesheet" media="only screen and (max-width: 601px)" href="/assets/css/resolutions/600.css">
    	<link rel="stylesheet" media="only screen and (max-width: 501px)" href="/assets/css/resolutions/500.css">

    	<link rel="shortcut icon" type="image/x-icon" href="/assets/favicon.png">
    </head>
    <body id="{$BodyID}" class="{$BodyClass}">
        <header id="top">
			<nav class="wrap">
				<a href="//anchorcms.ru" title="Вернуться на главную Anchor">
					<img src="//anchorcms.ru/assets/img/logo.png" alt="Anchor CMS"></a>

				<ul>
				
				
									 					 <li><a href="//blog.anchorcms.ru">Блог</a></li>
				 				 
				 					 					 <li><a href="//anchorcms.ru/docs">Помощь</a></li>
				 				 
				 					 					 <li><a href="//anchorcms.ru/resources">Ресурсы</a></li>
				 				 				 				 
				 					 					 <li class="active"><a href="//forums.anchorcms.ru">Форум</a></li>
				 				 
				 					 					 				 				</ul>
			</nav></header>
    <section id="content"><h2>Форумы</h2>        <aside id="sidebar">
          
			
			<div class="Box BoxCategories">
 {asset name="Panel"}
 </div>
           </aside>

        <div class="primary">
            <div class="Tabs DiscussionsTabs">
   <ul>
            <li class="Active"><a href="/forum/discussions" class="TabLink">All Discussions</a></li>
      
                  <li><a href="/forum/discussions/mine" class="MyDiscussions TabLink">My Discussions<span>1</span></a></li>
         </ul>
   </div>

   {asset name="Content"}
   
      </div>
	 
    </section>
	

 {asset name="Foot"}
		<footer id="footer">
		    <div class="wrap">
		        <small><b>&copy; 2014.</b> Anchor это гордая и открытая всему миру система.</small>		        
		        <nav>
		            <a href="//twitter.com/anchorcms">Твиттер</a>
		            <a href="//github.com/anchorus">GitHub</a>
		            <a href="//roar.im">Roar</a>
		            <a href="//vk.com/anchorcms">VK</a>
		        </nav>
		    </div>
		</footer>
		
{literal}<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter22009927 = new Ya.Metrika({id:22009927,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/22009927" style="position:absolute; left:-9999px;" alt="" /></div></noscript>{/literal}

    </body>
</html>