	</main>

	<footer>
		<p><img src="<?php bloginfo('template_url'); ?>/images/logo_footer.png" alt=""></p>

		<div class="bt-top">
	    <a href="#topo">^</a>
		</div>
	</footer>
<?php wp_footer(); ?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scroll_suave.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/botao_top.js"></script>

<script src="<?php bloginfo('template_url'); ?>/bower_components/wow/dist/wow.min.js"></script>

<script>
		$(function(){
			new WOW().init(); // CHAMADA PARA OS EFEITOS DE ROLAGEM

		});
</script>
</body>
</html>