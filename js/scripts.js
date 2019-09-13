<script>
	$(document).ready(function(){
		$(".myElement").hover(function(){
			$(".zoomElement").css("transform","scale(1.2,1.2)"), function(){
				$(this).css("transform","scale(1,1)");
			};
		})
	});
</script>