<?php get_header(); ?>

<button>Botão</button>
<div class="painel">
	<ul>
		<li><a href="#">Lorem ipsum.</a></li>
		<li><a href="#">Dolor, iusto.</a></li>
		<li><a href="#">Ex, sunt.</a></li>
		<li><a href="#">Nesciunt, minima?</a></li>
		<li><a href="#">Quos, iste!</a></li>
	</ul>


</div>

<?php get_footer(); ?>

<script>
	jQuery(document).ready(function(){
		
		jQuery('button').click(function(){
			jQuery(this).hide(1000);
		});
	});
</script>
