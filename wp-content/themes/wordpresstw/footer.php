		</div>
		<?php wp_footer(); ?>
		<script>
		<?php if(is_home()): ?>
			var count = 2;
			$(window).scroll(function(){
                if($(window).scrollTop() == $(document).height() - $(window).height()){
                   loadArticle(count);
                   count++;
                }
            });
			function loadArticle(pageNumber){    
                $.ajax({
                    url: "<?php bloginfo('wpurl') ?>/wp-admin/admin-ajax.php",
                    type:'POST',
                    data: "action=infinite_scroll&page_no="+ pageNumber + '&loop_file=loop', 
                    success: function(html){
                        $(".post-list").append(html);   // This will be the div where our content will be loaded
                    }
                });
                return false;
            }
		</script>
		<?php endif; ?>
		<!-- google analytics -->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-77266192-1', 'auto');
		ga('send', 'pageview');
		</script>
	</body>
</html>
