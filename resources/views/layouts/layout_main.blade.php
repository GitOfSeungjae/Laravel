<!DOCTYPE html>
<html>
<head>
 </head>
 	<body>
	 	<div class='mainTitle'>
	 		@yield('mainTitle')
	 	</div>
	 	<br>
	 	<div class='mainFilters'>
	 		@yield('mainFilters')
	 	</div>
	 	<br>
	 	<div class='mainLists' style="overflow-x:scroll; overflow-y:scroll;" >
	 		@yield('mainLists')
	 	</div>
	 	<br>
	 	<div class='mainFooter'>
	 		@yield('mainFooter')
	 	</div>
	 </body>
 </html>