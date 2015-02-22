<?php include $_SERVER["DOCUMENT_ROOT"] . '/inc/header.php'; ?>

		<section class="content">
			<div class="container section-content">
				<div class="row">
					<div class="col-md-8">
						<h1>.css()</h1>
						<hr>

						<div class="description">
							<p>Get the value of a computed style property for the first element in the set of matched elements or set one or more CSS properties for every matched element.</p>

							<p>The .css() method is a convenient way to get a computed style property from the first matched element, especially in light of the different ways browsers access most of those properties (the getComputedStyle() method in standards-based browsers versus the currentStyle and runtimeStyle properties in Internet Explorer) and the different terms browsers use for certain properties. For example, Internet Explorer's DOM implementation refers to the float property as styleFloat, while W3C standards-compliant browsers refer to it as cssFloat. For consistency, you can simply use "float", and jQuery will translate it to the correct value for each browser.</p>							
						</div>
						<hr>

						<div class="syntax">
							<h2>Syntax</h2>
							<p><pre class="expresion"> .css( propertyName ) </pre></p>
							<p>Returns: String</p>
						</div>

						<div class="example">
							<h2>Example</h2>
							<xmp>
<!doctype html>
<html lang="en">
<head>
	<title>css demo</title>
	<style>
	div {
		width: 60px;
		height: 60px;
		margin: 5px;
		float: left;
	}
	</style>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
	<span id="result">&nbsp;</span>
	<div style="background-color:blue;"></div>
	<div style="background-color:rgb(15,99,30);"></div>
	<div style="background-color:#123456;"></div>
	<div style="background-color:#f11;"></div>
	<script>
		$( "div" ).click(function() {
		var color = $( this ).css( "background-color" );
		$( "#result" ).html( "That div is <span style='color:" +
		color + ";'>" + color + "</span>." );
		});
	</script>
</body>
</html>								
							</xmp>

						</div>
					</div>

					<div class="col-md-4">
						<?php include $_SERVER["DOCUMENT_ROOT"] . '/inc/aside.php'; ?>
					</div>
				</div>
			</div>
		</section>

<?php include $_SERVER["DOCUMENT_ROOT"] . '/inc/footer.php'; ?>		