<?php

$colors = array('red','pink','purple','deep purple','indigo','blue','light blue','cyan','teal','green','light green','lime','yellow','amber','orange','deep orange','brown','grey','blue grey');

$colors_a = array('red','pink','purple','deep purple','indigo','blue','light blue','cyan','teal','green','light green','lime','yellow','amber','orange','deep orange');

include 'changeLog.php';

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Colorful.scss</title>
  <meta name="description" content="Colorful.scss is a CSS-framework for implementing">
  <meta name="author" content="Eric J Snover">

  <link rel="stylesheet" href="css/colorful.css">

  <style>
	  * {
		  box-sizing: border-box;
	  }
	  body {
		  margin: 0;
		  color: #fff;
		  font-family: 'Helvetica';
		  max-width: 800px;
		  margin: 0 auto;
	  }
	  a {
		  text-decoration: none;
	  }
	  img {
		  width: 100%;
		  max-width: 450px;
		  text-align: center;
	  }
	  .box {
		  width: 100%;
		  padding: 30px;
		  text-align: center;
		  font-size: 15px;
		  text-transform: capitalize;
	  }
	  .box.footer {
		  font-size: 11px;
		  text-align: left;
		  padding: 50px;
	  }
	  .box.header {
	  		font-size: 20px;
	  		padding: 30px;
	  		text-transform: none;
	  }
	  .box.instructions {
		  text-align: left;
		  text-transform: none;
		  line-height: 1.5em;
	  }
	  .box.instructions p.example {
		  padding: 15px;
	  }
	  .changelogBanner {
		position: fixed;
		z-index: 99;
		width: 100%;
		height: auto;
		text-align: center;
		top: 0;
		left: 0;
		font-size: 12px;
		line-height: 0;
		padding: 0px 0;
		cursor: pointer;
	  }
	  img.ad {

	  }
	  .fixed-link {
		  position: fixed;
		  z-index: 99;
		  width: 100%;
		  height: 50px;
		 bottom: 0;
		  left: 0;
		  cursor: pointer;
	  }
	  .fixed-link .mini-link:hover {
		  opacity: .7;
	  }
	  .fixed-link .mini-link {
		  <?php $MLWidth = ( 100/count($colors) ); ?>
		  width: <?=( $MLWidth - 1 )."%"?>;
		  height: 30px;
		  margin: 10px .5%;
		  float: left;
		  transition: opacity .3s;
	  }
	  .logo-overlay {
		  position: absolute;
		  top: 40px;
		  right: 15px;
		  width: 200px;
	  }
	  .logo {
		  position: relative;
	  }
  </style>

</head>
<body class='colorful-grey-900'>
<br>

<div class='changelogBanner colorful-blue-500'>
	<p>Version <?=$change_log[0]["version"]?> is here! Click <a href='#changelog' class='colorful-text-yellow-a2'>here</a> to read what we added!</p>
</div>

<div class='box'>
	<img src='colorfulcss_logo.jpg' class='logo' rel='The Colorful.css logo by Eric J Snover'>
	<img src='ad.svg' class='logo-overlay' rel='Market showing 20,000 downloads since Colorful first launched in 2014!'>
</div>


<div class='box instructions'>
	Download: <a href='https://github.com/ericjsnover/colorful/archive/v1.04.zip' class='colorful-text-blue-500'>https://github.com/ericjsnover/colorful/archive/v1.04.zip</a><br>
	View on GitHub: <a href='https://github.com/ericjsnover/colorful' class='colorful-text-blue-500'>https://github.com/ericjsnover/colorful</a>
</div>

<div class='box header colorful-black'>
	Quickstart
</div>

<div class='box instructions'>
	<p>To use colorful.css, just throw a class on any html element like this:</p>
	<p class='example colorful-bg-black colorful-text-cyan-200'>.colorful-green-500</p>
	<p>The above class would result in an html element having a background of the primary green. In other words, you'd get this:</p>
	<p class='example colorful-green-500'></p>
	<p>The class names are broken down into a few parts separated by hyphens.</p>
	<p class='example colorful-bg-black colorful-text-cyan-200'>colorful</p>
	<p>The first part is just a prefix that helps prevent conflicts with other classses in the project.</p>
	<p class='example colorful-bg-black colorful-text-cyan-200'>green</p>
	<p>The second part is the color name. For a full list of color names <a href='#swatches' class='colorful-text-blue-500'>click here</a>.</p>
	<p class='example colorful-bg-black colorful-text-cyan-200'>500</p>
	<p>The final part is the hue of the color you picked in the second part. For a full list of available hues <a href='#swatches' class='colorful-text-blue-500'>click here</a>.</p>
	<p>Now that you know the basics, feel free to keep reading about everything Colorful.css has to offer, or click one of the colors at the top to be taken to examples of swatches!</p>
</div>


<div class='box header colorful-black'>
	Text Color
</div>

<div class='box instructions'>
	<p>Take a quick look at this example:</p>
	<p class='example colorful-bg-black colorful-text-cyan-200'>.colorful-green-500</p>
	<p>This class would make the background-color green with a hue of 500 (the primary hue).</p>
	<p>By default, a colorful class will affect the background-color property. To change an element's text color property, just modify the class to the following:</p>
	<p class='example colorful-bg-black colorful-text-cyan-200'>.colorful-text-green-500</p>
	<p>By adding the keyword "text" after the prefix "colorful" and before the "color" keyword, the text color will now be affected rather than the background-color.</p>
</div>

<div class='box header colorful-black'>
	Alternative Background Syntax
</div>

<div class='box instructions'>
	<p>If you would rather specify that a class targets the background-color, you can also use:</p>
	<p class='example colorful-bg-black colorful-text-cyan-200'>.colorful-bg-green-500</p>
	<p>This class will work exactly the same as:</p>
	<p class='example colorful-bg-black colorful-text-cyan-200'>.colorful-green-500</p>
	<p>When working on teams that may be unfamiliar with Colorful.scss, you may find it useful to use the more semantic syntax to literally state that the class is affecting the background. Your choice!</p>
</div>

<div class='box header colorful-black'>
	Automatic Text Color
</div>

<div class='box instructions'>
	<p>When no text color is specified on an element with a Colorful.css class, the text color defaults to either dark text (black) or light text (white). For example:</p>
	<p class='example colorful-blue-500'>.colorful-blue-500</p>
	<p class='example colorful-blue-400'>.colorful-blue-400</p>
	<p>In the first example, the text color defaults to light text and in the second example the text color defaults to dark text.</p>
	<p class='colorful-text-grey-800'>These defaults are based on the Google Material guidelines and can be customized in the SCSS file "_fontcolor.scss".</p>
</div>



<div class='box header colorful-black'>
	Primary Hues
</div>

<div class='box instructions'>
	<p>Primary hues are set to "500". For example, the primary hue of red is:</p>
	<p class='example colorful-bg-black colorful-text-cyan-200'>.colorful-red-500</p>
	<p>will produce..</p>
	<p class='example colorful-red-500'>.colorful-red-500</p>
</div>


<div class='box header colorful-black'>
	Accent Colors
</div>

<div class='box instructions'>
	<p>Accent colors are extra hues that are great for complimenting primary colors. Accent hues are set to "a100","a200","a400","a700". For example:</p>
	<p class='example colorful-bg-black colorful-text-cyan-200'>.colorful-orange-a200</p>
	<p>will produce..</p>
	<p class='example colorful-orange-a200'>.colorful-orange-a200</p>
	<p>To pair a primary blue with an orange accent of A200, you would use the following:</p>
	<p class='example colorful-blue-500'>.colorful-blue-500</p>
	<p class='example colorful-orange-a200'>.colorful-orange-a200</p>
</div>

<div class='box header colorful-black'>
	Alternative Hue Syntax
</div>

<div class='box instructions'>
	<p>The primary way of selecting a green hue of 500 is:</p>
	<p class='example colorful-bg-black colorful-text-cyan-200'>.colorful-green-500</p>
	<p>The alternative syntax is to use a hue based on a range of 0 to 9, with 0 being the lightest hue and 9 being the darkest. For example:</p>
	<p class='example colorful-bg-black colorful-text-cyan-200'>.colorful-green-5</p>
	<p>This class has the same hue as ".colorful-green-500".</p>
	<p class='example colorful-green-500'>.colorful-green-500</p>
	<p class='example colorful-green-5'>.colorful-green-5</p>
	<p>The alternative syntax was added to allow designers to think of very linear progression of hues, and to aid in randomly generated colors.</p>
	<p>Accent colors have the alternative syntax of "A1","A2","A4","A7".</p>
	<p class='colorful-text-grey-700'>The alternative hue "0" is equivalent to the hue "50"</p>
</div>


<a name='swatches'></a>
<div class='box header colorful-black'>
	Color Swatches
</div>


<?php foreach($colors as $color): ?>
<a name='color_<?=str_replace(" ","",$color)?>'></a>
<?php for($i=0;$i<=13;$i++): ?>
<?php $class = str_replace(" ", "", $color); ?>
<?php switch(true): case ($i==0): ?>

	<div class='box colorful-<?=$class?>-50'><?=$color?> 50</div>
<?php break; case ($i<10): ?>
	<div class='box colorful-<?=$class?>-<?=$i?>00'><?=$color?> <?=$i?>00</div>
<?php break; endswitch; ?>
<?php endfor; ?>
<?php endforeach; ?>

<div class='box header colorful-black'>
	Accent Color Swatches
</div>

<?php foreach($colors_a as $color): ?>
<?php for($i=0;$i<=13;$i++): ?>
<?php $class = str_replace(" ", "", $color); ?>
<?php switch(true): case ($i==10): ?>

	<div class='box colorful-<?=$class?>-a100'><?=$color?> A100</div>
<?php break; case ($i==11): ?>
	<div class='box colorful-<?=$class?>-a200'><?=$color?> A200</div>
<?php break; case ($i==12): ?>
	<div class='box colorful-<?=$class?>-a400'><?=$color?> A400</div>
<?php break; case ($i==13): ?>
	<div class='box colorful-<?=$class?>-a700'><?=$color?> A700</div>
<?php break; endswitch; ?>
<?php endfor; ?>
<?php endforeach; ?>

<div class='box header colorful-black'>
	Advanced Configuration
</div>

<div class='box instructions'>
	<p>Color variables are stored in "_variables.scss". By changing color keys under "Swatches" you can easily implement custom palettes without changing the HTML markup. This file also contains the variables that determine the dark and light text color defaults.</p>
</div>
<a name='changelog'></a>
<div class='box header colorful-black'>
	Change Log
</div>

<?php
/*
$change_log = array(
	array(
		"version"=>"1.04",
		"changes"=>array(
			"Palettes are now more customizable than ever!"
		)
	)
);
*/
?>

<div class='box instructions'>
<ul>
<?php foreach($change_log as $entry): ?>
	<li><?=$entry["version"]?></li>

		<ul>
<?php foreach($entry["changes"] as $change): ?>
			<li><?=$change?></li>
<?php endforeach; ?>
		</ul>

<?php endforeach; ?>
</ul>
</div>

<div class='box header colorful-black'>
	License
</div>

<div class='box instructions'>
	<p>Colorful.scss is licensed under the Apache 2.0 license, which basically means you are free to use it in any project as long as you give me credit by NOT REMOVING the copyright header in the code. In other words, stealing code sucks so be cool and give credit!</p>
	<p class='colorful-text-grey-700'>To read the Apache 2.0 license, <a href='http://www.apache.org/licenses/LICENSE-2.0.html' class='colorful-text-blue-500'>click here</a>.</p>
</div>

<div class='box header colorful-black'>
	Special Thanks
</div>

<div class='box instructions'>
	<p>Since first releasing Colorful.css back in 2014, the reception in the development and design community has been so overwhelmingly positive. The support, use and feedback of the hundreds of creatives who have tried Colorful.scss has been the driving force behind making the code publicly available and open source. I just want to say thanks to everybody who has been part of this journey, you are all awesome!</p>
	<p>The default color swatches are based entirely on Google's Material Design guidelines If you intend to use the default color swatches, I strongly encourage reading the Google documentation on these guidelines <a href='https://material.google.com' class='colorful-text-blue-500'>here</a>.</p>
</div>

	<div class='box footer colorful-bg-black'>Copyright <?=date('Y',time())?> Eric J Snover<br>Licensed under the Apache License, Version 2.0 (the "License");<br>you may not use this file except in compliance with the License.<br>You may obtain a copy of the License at<br>http://www.apache.org/licenses/LICENSE-2.0<br>Unless required by applicable law or agreed to in writing, software<br>distributed under the License is distributed on an "AS IS" BASIS,<br>WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.<br>See the License for the specific language governing permissions and<br>limitations under the License.</div>
<br><br><br><br><br>
<div class='fixed-link colorful-bg-grey-900'>
<?php foreach($colors as $color): ?>
	<a href='#color_<?=str_replace(" ","",$color)?>'>
		<div class='mini-link colorful-<?=str_replace(" ","",$color)?>-500'></div>
	</a>
<?php endforeach; ?>
</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86727260-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>