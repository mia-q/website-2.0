<?php 
$margin = '0 0 -35px 0';
$pattern_style = 'fill="none" style="stroke: ' . $pattern_color . '; stroke-width: 0.2px; stroke-linejoin: round;"';
$pattern_svg = '
	<g>
		<defs>
			<polygon id="3d-square-mask" points="5.7,27.6 50.1,1.3 94.5,26.3 94.5,73 50.1,98.7 5.7,73"/>
		</defs>
		<clipPath id="3d-square">
			<use xlink:href="#3d-square-mask"  style="overflow:visible;"/>
		</clipPath>
		<g style="clip-path:url(#3d-square);">
			<rect ' . $pattern_style . ' x="1.4" y="83.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -65.9129 28.5605)" width="0.3" height="21.1"/>
			<rect ' . $pattern_style . ' x="7.6" y="68.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -59.6967 31.1347)" width="0.3" height="38.8"/>
			<rect ' . $pattern_style . ' x="13.9" y="53.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -53.4063 33.7383)" width="0.3" height="56.5"/>
			<rect ' . $pattern_style . ' x="20.2" y="38.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -47.2237 36.3832)" width="0.3" height="74.2"/>
			<rect ' . $pattern_style . ' x="26.4" y="23" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -40.9413 38.9867)" width="0.3" height="91.9"/>
			<rect ' . $pattern_style . ' x="32.7" y="7.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -34.7281 41.561)" width="0.3" height="109.6"/>
			<polygon ' . $pattern_style . ' points="-5.9,11.3 -6.1,11.5 83.8,101.4 83.9,101.5 84.1,101.3 -5.8,11.4 		"/>
			<rect ' . $pattern_style . ' x="45.1" y="-22.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -22.2102 46.7032)" width="0.3" height="144.9"/>
			<rect ' . $pattern_style . ' x="53.1" y="-33.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -16.6991 51.0421)" width="0.3" height="157.5"/>
			<rect ' . $pattern_style . ' x="60.3" y="-30.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -10.8063 54.581)" width="0.3" height="142.5"/>
			<polygon ' . $pattern_style . ' points="110.9,78.1 22.8,-10.1 22.7,-10.1 22.5,-9.9 110.7,78.3 		"/>
			<polygon ' . $pattern_style . ' points="110.7,65.8 110.9,65.6 35.2,-10.1 35,-9.9 110.6,65.7 		"/>
			<rect ' . $pattern_style . ' x="79.1" y="-23.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 7.8928 62.3682)" width="0.3" height="89.5"/>
			<rect ' . $pattern_style . ' x="85.3" y="-20.5" transform="matrix(0.7071 -0.7071 0.7071 0.7071 14.1887 64.9364)" width="0.3" height="71.7"/>
			<rect ' . $pattern_style . ' x="91.5" y="-18" transform="matrix(0.7071 -0.7071 0.7071 0.7071 20.4235 67.4753)" width="0.3" height="54.1"/>
			<rect ' . $pattern_style . ' x="97.8" y="-15.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 26.7026 70.0789)" width="0.3" height="36.4"/>
			<rect ' . $pattern_style . ' x="104" y="-12.8" transform="matrix(0.7071 -0.7071 0.7071 0.7071 32.922 72.6528)" width="0.3" height="18.7"/>
			<path ' . $pattern_style . ' d="M1.7,87.8c-2.5-2.5-5-5-7.5-7.5h-0.1l-0.2,0.2l0.1,0.1c2.5,2.5,5,5,7.4,7.4c4.4,4.4,9,9,13.4,13.4l0.1,0.1l0.2-0.2
				l-0.1-0.1C10.6,96.8,6.1,92.2,1.7,87.8z"/>
			<path ' . $pattern_style . ' d="M10.5,84.1C5.1,78.7-0.4,73.2-5.8,67.8h-0.1L-6.1,68l0.1,0.1C-0.6,73.5,4.9,79,10.2,84.3c5.6,5.6,11.4,11.4,17.1,17.1
				l0.1,0.1l0.2-0.2l-0.1-0.1C21.9,95.5,16.1,89.7,10.5,84.1z"/>
			<path ' . $pattern_style . ' d="M-5.8,55.3l-0.3,0.2l0.1,0.1c15.3,15.3,30.8,30.8,45.9,45.9l0.1,0.1l0.2-0.2l-0.1-0.1C25,86.2,9.5,70.6-5.8,55.3z"/>
			<path ' . $pattern_style . ' d="M27.8,76.5C16.8,65.4,5.4,54.1-5.8,42.8l-0.1-0.1l-0.2,0.2L-6,43C5.2,54.3,16.6,65.7,27.6,76.7
				c8.1,8.1,16.5,16.5,24.8,24.8l0.1,0.1l0.2-0.2l-0.1-0.1C44.3,92.9,35.9,84.6,27.8,76.5z"/>
			<path ' . $pattern_style . ' d="M28.1,64.2C17,53.1,5.5,41.6-5.8,30.3h-0.1l-0.2,0.2l0.1,0.1C5.3,41.8,16.8,53.3,27.9,64.4l0.1,0.1
				c12.1,12.1,24.6,24.6,36.9,36.9l0.1,0.1l0.2-0.2l-0.1-0.1C52.7,88.9,40.2,76.4,28.1,64.2z"/>
			<rect ' . $pattern_style . ' x="35.6" y="0.6" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -31.7139 42.7889)" width="0.3" height="118.1"/>
			<rect ' . $pattern_style . ' x="41.9" y="-14.5" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -25.4232 45.3924)" width="0.3" height="135.8"/>
			<rect ' . $pattern_style . ' x="48.1" y="-29.6" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -19.2067 47.9666)" width="0.3" height="153.5"/>
			<rect ' . $pattern_style . ' x="57.1" y="-32.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -14.0249 53.2701)" width="0.3" height="151.6"/>
			<rect ' . $pattern_style . ' x="63.4" y="-29.6" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -7.8123 55.8443)" width="0.3" height="133.9"/>
			<rect ' . $pattern_style . ' x="69.6" y="-27" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.5291 58.4479)" width="0.3" height="116.2"/>
			<path ' . $pattern_style . ' d="M80.8,29.8L80.8,29.8c9.9,9.8,19.9,19.9,29.9,29.8l0.1,0.1l0.2-0.2l-0.1-0.1c-10-10-20.1-20.1-29.9-29.9h-0.2
				c-12.9-13-26.4-26.4-39.5-39.6l-0.1-0.1L41-10l0.1,0.1C54.3,3.4,67.8,16.8,80.8,29.8z"/>
			<path ' . $pattern_style . ' d="M81.5,18.1c9.6,9.5,19.4,19.4,29.1,29.1l0.1,0.1l0.2-0.2l-0.1-0.1c-9.7-9.8-19.5-19.6-29.1-29.1
				c-9.2-9.2-18.6-18.6-27.9-28l-0.1-0.1L53.5-10l0.1,0.1C62.9-0.5,72.4,8.9,81.5,18.1z"/>
			<path ' . $pattern_style . ' d="M90,14.1c6.8,6.8,13.8,13.7,20.6,20.6l0.1,0.1l0.2-0.2l-0.1-0.1c-6.9-6.9-13.9-13.9-20.6-20.6c-7.8-7.9-16-16-23.9-24
				l-0.1-0.1L66-10l0.1,0.2C74-1.8,82.1,6.2,90,14.1z"/>
			<path ' . $pattern_style . ' d="M84.3-4.1c9,9,17.5,17.5,26.3,26.3l0.1,0.1l0.2-0.2l-0.1-0.1c-8.7-8.8-17.2-17.3-26.2-26.4c-1.8-1.7-3.6-3.5-5.3-5.2
				l-0.6-0.6L78.5-10l0.6,0.6C80.8-7.7,82.6-5.9,84.3-4.1z"/>
			<path ' . $pattern_style . ' d="M100.6-0.3c3.3,3.3,6.7,6.7,10,10l0.1,0.1l0.2-0.2l-0.1-0.1c-3.4-3.3-6.7-6.7-10-10c-3.1-3.1-6.3-6.4-9.5-9.5l-0.1-0.1
				L91-9.9h0.1C94.3-6.7,97.5-3.4,100.6-0.3z"/>
			<path ' . $pattern_style . ' d="M110.6-2.8l0.3-0.1L110.8-3c-2.3-2.3-4.7-4.7-7-7l-0.1-0.1l-0.2,0.2l0.1,0.1C105.9-7.5,108.3-5.1,110.6-2.8z"/>
		</g>
	</g>
'; 

include( AREOI__PLUGIN_LIGHTSPEED_DIR . 'partials/pattern.php' );

$margin = '0';
$pattern_style = 'fill="none" style="stroke: ' . $pattern_color . '; stroke-width: 0.1px; stroke-linejoin: round;"';
$pattern_svg = '
	<g>
		<defs>
			<polygon id="3d-square-mask" points="5.7,27.6 50.1,1.3 94.5,26.3 94.5,73 50.1,98.7 5.7,73 		"/>
		</defs>
		<clipPath id="3d-square">
			<use xlink:href="#3d-square-mask"  style="overflow:visible;"/>
		</clipPath>
		<g style="clip-path:url(#3d-square);">
			<rect ' . $pattern_style . ' x="1.4" y="83.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -65.9129 28.5605)" width="0.3" height="21.1"/>
			<rect ' . $pattern_style . ' x="7.6" y="68.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -59.6967 31.1347)" width="0.3" height="38.8"/>
			<rect ' . $pattern_style . ' x="13.9" y="53.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -53.4063 33.7383)" width="0.3" height="56.5"/>
			<rect ' . $pattern_style . ' x="20.2" y="38.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -47.2237 36.3832)" width="0.3" height="74.2"/>
			<rect ' . $pattern_style . ' x="26.4" y="23" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -40.9413 38.9867)" width="0.3" height="91.9"/>
			<rect ' . $pattern_style . ' x="32.7" y="7.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -34.7281 41.561)" width="0.3" height="109.6"/>
			<polygon ' . $pattern_style . ' points="-5.9,11.3 -6.1,11.5 83.8,101.4 83.9,101.5 84.1,101.3 -5.8,11.4 		"/>
			<rect ' . $pattern_style . ' x="45.1" y="-22.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -22.2102 46.7032)" width="0.3" height="144.9"/>
			<rect ' . $pattern_style . ' x="53.1" y="-33.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -16.6991 51.0421)" width="0.3" height="157.5"/>
			<rect ' . $pattern_style . ' x="60.3" y="-30.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -10.8063 54.581)" width="0.3" height="142.5"/>
			<polygon ' . $pattern_style . ' points="110.9,78.1 22.8,-10.1 22.7,-10.1 22.5,-9.9 110.7,78.3 		"/>
			<polygon ' . $pattern_style . ' points="110.7,65.8 110.9,65.6 35.2,-10.1 35,-9.9 110.6,65.7 		"/>
			<rect ' . $pattern_style . ' x="79.1" y="-23.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 7.8928 62.3682)" width="0.3" height="89.5"/>
			<rect ' . $pattern_style . ' x="85.3" y="-20.5" transform="matrix(0.7071 -0.7071 0.7071 0.7071 14.1887 64.9364)" width="0.3" height="71.7"/>
			<rect ' . $pattern_style . ' x="91.5" y="-18" transform="matrix(0.7071 -0.7071 0.7071 0.7071 20.4235 67.4753)" width="0.3" height="54.1"/>
			<rect ' . $pattern_style . ' x="97.8" y="-15.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 26.7026 70.0789)" width="0.3" height="36.4"/>
			<rect ' . $pattern_style . ' x="104" y="-12.8" transform="matrix(0.7071 -0.7071 0.7071 0.7071 32.922 72.6528)" width="0.3" height="18.7"/>
			<path ' . $pattern_style . ' d="M1.7,87.8c-2.5-2.5-5-5-7.5-7.5h-0.1l-0.2,0.2l0.1,0.1c2.5,2.5,5,5,7.4,7.4c4.4,4.4,9,9,13.4,13.4l0.1,0.1l0.2-0.2
				l-0.1-0.1C10.6,96.8,6.1,92.2,1.7,87.8z"/>
			<path ' . $pattern_style . ' d="M10.5,84.1C5.1,78.7-0.4,73.2-5.8,67.8h-0.1L-6.1,68l0.1,0.1C-0.6,73.5,4.9,79,10.2,84.3c5.6,5.6,11.4,11.4,17.1,17.1
				l0.1,0.1l0.2-0.2l-0.1-0.1C21.9,95.5,16.1,89.7,10.5,84.1z"/>
			<path ' . $pattern_style . ' d="M-5.8,55.3l-0.3,0.2l0.1,0.1c15.3,15.3,30.8,30.8,45.9,45.9l0.1,0.1l0.2-0.2l-0.1-0.1C25,86.2,9.5,70.6-5.8,55.3z"/>
			<path ' . $pattern_style . ' d="M27.8,76.5C16.8,65.4,5.4,54.1-5.8,42.8l-0.1-0.1l-0.2,0.2L-6,43C5.2,54.3,16.6,65.7,27.6,76.7
				c8.1,8.1,16.5,16.5,24.8,24.8l0.1,0.1l0.2-0.2l-0.1-0.1C44.3,92.9,35.9,84.6,27.8,76.5z"/>
			<path ' . $pattern_style . ' d="M28.1,64.2C17,53.1,5.5,41.6-5.8,30.3h-0.1l-0.2,0.2l0.1,0.1C5.3,41.8,16.8,53.3,27.9,64.4l0.1,0.1
				c12.1,12.1,24.6,24.6,36.9,36.9l0.1,0.1l0.2-0.2l-0.1-0.1C52.7,88.9,40.2,76.4,28.1,64.2z"/>
			<rect ' . $pattern_style . ' x="35.6" y="0.6" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -31.7139 42.7889)" width="0.3" height="118.1"/>
			<rect ' . $pattern_style . ' x="41.9" y="-14.5" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -25.4232 45.3924)" width="0.3" height="135.8"/>
			<rect ' . $pattern_style . ' x="48.1" y="-29.6" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -19.2067 47.9666)" width="0.3" height="153.5"/>
			<rect ' . $pattern_style . ' x="57.1" y="-32.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -14.0249 53.2701)" width="0.3" height="151.6"/>
			<rect ' . $pattern_style . ' x="63.4" y="-29.6" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -7.8123 55.8443)" width="0.3" height="133.9"/>
			<rect ' . $pattern_style . ' x="69.6" y="-27" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.5291 58.4479)" width="0.3" height="116.2"/>
			<path ' . $pattern_style . ' d="M80.8,29.8L80.8,29.8c9.9,9.8,19.9,19.9,29.9,29.8l0.1,0.1l0.2-0.2l-0.1-0.1c-10-10-20.1-20.1-29.9-29.9h-0.2
				c-12.9-13-26.4-26.4-39.5-39.6l-0.1-0.1L41-10l0.1,0.1C54.3,3.4,67.8,16.8,80.8,29.8z"/>
			<path ' . $pattern_style . ' d="M81.5,18.1c9.6,9.5,19.4,19.4,29.1,29.1l0.1,0.1l0.2-0.2l-0.1-0.1c-9.7-9.8-19.5-19.6-29.1-29.1
				c-9.2-9.2-18.6-18.6-27.9-28l-0.1-0.1L53.5-10l0.1,0.1C62.9-0.5,72.4,8.9,81.5,18.1z"/>
			<path ' . $pattern_style . ' d="M90,14.1c6.8,6.8,13.8,13.7,20.6,20.6l0.1,0.1l0.2-0.2l-0.1-0.1c-6.9-6.9-13.9-13.9-20.6-20.6c-7.8-7.9-16-16-23.9-24
				l-0.1-0.1L66-10l0.1,0.2C74-1.8,82.1,6.2,90,14.1z"/>
			<path ' . $pattern_style . ' d="M84.3-4.1c9,9,17.5,17.5,26.3,26.3l0.1,0.1l0.2-0.2l-0.1-0.1c-8.7-8.8-17.2-17.3-26.2-26.4c-1.8-1.7-3.6-3.5-5.3-5.2
				l-0.6-0.6L78.5-10l0.6,0.6C80.8-7.7,82.6-5.9,84.3-4.1z"/>
			<path ' . $pattern_style . ' d="M100.6-0.3c3.3,3.3,6.7,6.7,10,10l0.1,0.1l0.2-0.2l-0.1-0.1c-3.4-3.3-6.7-6.7-10-10c-3.1-3.1-6.3-6.4-9.5-9.5l-0.1-0.1
				L91-9.9h0.1C94.3-6.7,97.5-3.4,100.6-0.3z"/>
			<path ' . $pattern_style . ' d="M110.6-2.8l0.3-0.1L110.8-3c-2.3-2.3-4.7-4.7-7-7l-0.1-0.1l-0.2,0.2l0.1,0.1C105.9-7.5,108.3-5.1,110.6-2.8z"/>
		</g>
	</g>
'; 
include( AREOI__PLUGIN_LIGHTSPEED_DIR . 'partials/pattern-media.php' );
?>