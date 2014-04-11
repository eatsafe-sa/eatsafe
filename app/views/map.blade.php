@extends('layouts.main')


@section('content')
<div class="container">
	<div class="row-fluid">
        <div class="span8" id="mapDisplay">
        	<iframe width="940" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.arcgis.com/home/webmap/embedViewer.html?webmap=53e04f0648664608b0a04f83fd202ec0&amp;extent=-99.3046,28.9648,-97.7473,29.8501"></iframe><br /><small><a href="http://www.arcgis.com/home/webmap/viewer.html?webmap=53e04f0648664608b0a04f83fd202ec0&amp;extent=-99.3046,28.9648,-97.7473,29.8501" style="color:#0000FF;text-align:left" target="_blank">View Larger Map</a></small>
    	</div>
    </div>
</div>@stop

