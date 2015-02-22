<?php include $_SERVER["DOCUMENT_ROOT"] . '/inc/header.php'; ?>

		<section class="content">
			<div class="container section-content">
				<div class="row">
					<div class="col-md-8">
						<h1>Events</h1>
						<hr>

						<div class="description">
							<p>HTML events are "things" that happen to HTML elements. When JavaScript is used in HTML pages, JavaScript can "react" on these events.</p>

							<p>Often, when events happen, you may want to do something.	JavaScript lets you execute code when events are detected.	HTML allows event handler attributes, with JavaScript code, to be added to HTML elements.</p>							
						</div>
						<hr>

						<div class="syntax">
							<h2>Syntax</h2>
							<p><xmp> <some-HTML-element some-event='some JavaScript'> </xmp></p>
							
<p><pre class="expresion"> Code (list of some common HTML events) </pre></p>
<p><pre class="expresion"> Event	Description </pre></p>
<p><pre class="expresion"> onchange	An HTML element has been changed </pre></p>
<p><pre class="expresion"> onclick	The user clicks an HTML element </pre></p>
<p><pre class="expresion"> onmouseover	The user moves the mouse over an HTML element </pre></p>
<p><pre class="expresion"> onmouseout	The user moves the mouse away from an HTML element </pre></p>
<p><pre class="expresion"> onkeydown	The user pushes a keyboard key </pre></p>
<p><pre class="expresion"> onload	The browser has finished loading the page </pre></p>
						</div>

						<div class="example">
							<h2>Example</h2>
							<xmp>
<button onclick="getElementById('demo').innerHTML=Date()">The time is?</button>

<p id="demo"></p>							
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