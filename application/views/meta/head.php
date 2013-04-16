
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<meta name="author" content="Albert Leao" />
	<meta name="description" content="Delifer Designs" />
	<title>Adapt.js - Adaptive CSS</title>
	<link rel="stylesheet" href="assets/css/master.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/mobile.min.css" />
	</noscript>
	<script>
		// Edit to suit your needs.
		var ADAPT_CONFIG = {
		  // Where is your CSS?
		  path: 'assets/css/',

		  // false = Only run once, when page first loads.
		  // true = Change on window resize and page tilt.
		  dynamic: true,

		  // First range entry is the minimum.
		  // Last range entry is the maximum.
		  // Separate ranges by "to" keyword.
		  range: [
		    '0px    to 760px  = mobile.min.css',
		    '760px  to 980px  = 720.min.css',
		    '980px  to 12800px = 960.min.css',
		  ]
		};
	</script>
	<script src="assets/js/adapt.min.js"></script>
</head>

<body>