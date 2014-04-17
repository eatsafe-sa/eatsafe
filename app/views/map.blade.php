@extends('layouts.main')

@section('topscript')

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<style>
	body {
		background-image: url('/img/denim-texture.jpg');
		color: black;

	}

  #legend {
    margin-left: 0;
    padding-left: 0;
    list-style: none;
    font-size: 12pt;
    padding-bottom: 0 !important;
  }

#legend li {
    padding-left: 30px;
    background-repeat: no-repeat;
    background-position: 0 0;
    line-height: 28px;
    margin: 0 20px 20px 0;
  }

#legend li:nth-child(1) {
    background-image: url('/img/bluemap-sm.png');
  }

#legend li:nth-child(2) {
     background-image: url('/img/greenmap-sm.png');
}

#legend li:nth-child(3) {
    background-image: url('/img/yellowmap-sm.png');
}

#legend li:nth-child(4) {
    background-image: url('/img/redmap-sm.png');
}

.well {
  padding-top: 10px;
}

</style>

 <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

@stop

@include('layouts.nav')
@section('content')
<div class='container'>
      <div class='row'>
        <div class='col-sm-4'>
          
          <div class='well'>
            <h4>
              Address <small>(<a id='find_me' href='#'>find me</a>)</small>
            </h4>
            <p>
              <input class='form-control' id='search_address' placeholder='Enter an address or an intersection' type='text' />
            </p>
          
              <label>
                Within: 
                <select id='search_radius'>
                  <option value='400'>2 blocks</option>
                  <option value='805'>1/2 mile</option>
                  <option value='1610'>1 mile</option>
                  <option value='3220'>2 miles</option>
                </select>
              </label>
          

				<h4>Restaurant Name </h4>
				<input class='form-control' id='text_search' placeholder="Enter a Restaurant" type='text' />
           
			<!-- Future select by neighborhood feature -->
			<!-- <p>
            <h4>Search by Region</h4>
			<label>
				<select id='select_type'>
				  <option value=''>All of San Antonio</option>
				  <option value='1'>Downtown</option>
				  <option value='2'>East Side</option>
				  <option value='3'>Northeast Side</option>
				  <option value='4'>Northwest Side</option>
				  <option value='5'>Inner West</option>
				  <option value='6'>South Side</option>
				  <option value='7'>North Side</option>
				  <option value='8'>Southtown</option> 
				  <option value='9'>Far West</option>
				  <option value='10'>Uptown</option> 
				  <option value='11'>Far North</option> 
				</select><br />
            </p> -->
            
            <p>
            	<h4>Demerits: <small>
			    <span id='demerit-selected-start'>0</span> - <span id='demerit-selected-end'>60</span>
			  </small>
				</h4>
				<div id='demerit-slider'></div>
				<span class='pull-left'>0</span>
				<span class='pull-right'>60</span>
				</p><br />
            <a class='btn btn-success' id='search' href='#'>
              <i class='glyphicon glyphicon-search'></i>
              Search
            </a>
            <a class='btn btn-default' id='reset' href='#'>
              <i class='glyphicon glyphicon-repeat'></i>
              Reset
            </a>
          </div>
          <div class='alert alert-info' id='result_box' ><strong id='result_count'></strong></div>
          <div class="well">
            <h4>Legend</h4>
            <ul id="legend">
              <li>0 to 10 Demerits</li>
              <li>11 to 20 Demerits</li>
              <li>21 to 30 Demerits</li>
              <li>31 Demerits and Over </li>
            </ul>
          </div>
        </div>
        <div class='col-sm-8'>
          <noscript>
            <div class='alert alert-info'>
              <h4>Your JavaScript is disabled</h4>
              <p>Please enable JavaScript to view the map.</p>
            </div>
          </noscript>
          <div id='map_canvas'></div>
          
        </div>
      </div>                  
    </div>
@stop

@section('bottomscript')

<script type="text/javascript" src="js/jquery.address.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places&v=3.14"></script>
    <script type="text/javascript" src="js/jquery.geocomplete.min.js"></script>
    <script type="text/javascript" src="js/maps_lib.js"></script>
    <script type="text/javascript" src="js/areas.js"></script>
    <script type='text/javascript'>
      //<![CDATA[
        $(window).resize(function () {
          var h = $(window).height(),
            offsetTop = 105; // Calculate the top offset
        
          $('#map_canvas').css('height', (h - offsetTop));
        }).resize();
        
        $(function() {
          MapsLib.initialize();
          $("#search_address").geocomplete();

          $(':checkbox').click(function(){
            MapsLib.doSearch();
          });

          $(':radio').click(function(){
            MapsLib.doSearch();
          });
          
          $('#search_radius').change(function(){
            MapsLib.doSearch();
          });
          
          $('#search').click(function(){
            MapsLib.doSearch();
          });
          
          $('#find_me').click(function(){
            MapsLib.findMe(); 
            return false;
          });
          
          $('#reset').click(function(){
            $.address.parameter('address','');
            MapsLib.initialize(); 
            return false;
          });
          
          $(":text").keydown(function(e){
              var key =  e.keyCode ? e.keyCode : e.which;
              if(key == 13) {
                  $('#search').click();
                  return false;
              }
          });
        });
      //]]>
    </script>
 @stop


