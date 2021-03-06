<?php include('header.php'); ?>
    <title>OpenPOI Registry FAQ</title>
  </head>
  <body>
    <div id="banner">
    	<span id="title"></span>
   		<span id="sub">Frequently Asked Questions</span>
    </div>
	<div class="ink-container">
		<h1>Frequently Asked Questions</h1>
	    <p class="question">What is a POI?</p>
	    <p class="answer">POI is a common term for points of interest, or places of
	      interest. <a href="http://en.wikipedia.org/wiki/Point_of_interest">Wikipedia's
	        definition</a> is pretty good.<br />
	    </p>
	    <p class="question">What is the OpenPOIs Registry?</p>
	    <p class="answer">A database of points of interest information containing
	      names and point locations for millions of businesses and civic places
	      across the globe. Access is free and the data is open to all to use.</p>
	    <p class="question">Why create yet another POI database?</p>
	    <ol>
	      <li><strong>We're all about connecting the Web:</strong> Most POI
	        databases are meant to provide rich, detailed information about the
	        places in their database. The intent of OpenPOI Registry is to be a
	        comprehensive directory of links to other POI databases having the
	        actual information about the places themselves. OpenPOI Registry is kind of
	        like a phone book for POIs. We don't store a lot of data. But we can
	        tell you the best places to get data.</li>
	      <li><strong>We love historians and researchers:</strong> OpenPOI Registry is the
	        only service committed to serving the needs of historical data. We will
	        support time-based queries and historical data storage, so that you can
	        find all the information about a place, not just what's there today.</li>
	    </ol>
	    <p class="question">How can I get the data?</p>
	    <p class="answer">The database can be queried by bounding box or by name via
	      simple WFS requests. Each POI also has an elegant, permanent, RESTful URI.<br />
	    </p>
	    <p class="question">What format is this data in?</p>
	    <p class="answer">All queries return data in either XML or JSON format
	      conforming to the <a href="http://www.w3.org/2010/POI/documents/Core/latest">draft
	        W3C POIWG specification</a>. <br />
	    </p>
	    <p class="answer"> <br />
	      <br />
	    </p>
		<?php include('footer.php'); ?>
	</div><!-- end ink-container -->
  </body>
</html>
