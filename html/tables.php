<?php include $_SERVER["DOCUMENT_ROOT"] . '/inc/header.php'; ?>

		<section class="content">
			<div class="container section-content">
				<div class="row">
					<div class="col-md-8">
						<h1>Tables</h1>
						<hr>

						<div class="description">
							<p>An HTML table is an element comprised of table rows and columns, much like you'd see when working with an application such as Excel. Tables are container elements, and their sole purpose is to house other HTML elements and arrange them in a tabular fashion -- row by row, column by column.
							</p>

							<p>Tables may seem difficult at first, but after working through this lesson, you'll see that they aren't so horrible. A table element consists of three different HTML tags including the &lt;table&gt; tag, &lt;tr&gt; (table rows), and the &lt;td&gt; (table columns) tags.	
							</p>							
						</div>
						<hr>

						<div class="syntax">
							<h2>Syntax</h2>
							<p>Attribute Description</p>
							<p><pre class="expresion"> disabled	Specifies that an input element should be disabled </pre></p>
							<p><pre class="expresion"> href	Specifies the URL (web address) for a link </pre></p>
							<p><pre class="expresion"> id	Specifies a unique id for an element </pre></p>
							<p><pre class="expresion"> src	Specifies the URL (web address) for an image </pre></p>
							<p><pre class="expresion"> style	Specifies an inline CSS style for an element </pre></p>
							<p><pre class="expresion"> title	Specifies extra information about an element (displayed as a tool tip) </pre></p>
							<p><pre class="expresion"> value	Specifies the value (text content) for an input element. </pre></p>

						</div>

						<div class="example">
							<h2>Example</h2>
							<xmp>
<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>		
    <th>Points</th>
  </tr>
  <tr>
    <td>John</td>
    <td>Smith</td>		
    <td>80</td>
  </tr>
  <tr>
    <td>Jane</td>
    <td>Doe</td>		
    <td>85</td>
  </tr>
  <tr>
    <td>John</td>
    <td>Doe</td>		
    <td>80</td>
  </tr>
</table>							
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