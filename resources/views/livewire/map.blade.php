@extends('layouts.app')

@section('content')

<div class="w-full h-screen" id = "map"></div>
{{-- {{dd($items)}} --}}
<script type="text/javascript">

var items = {!! json_encode($items) !!};
var url = "http://"+window.location.host+"/";
var map = L.map('map').setView([41.8, 1], 2);


const corner1 = L.latLng(-90, -200);
const corner2 = L.latLng(90, 200);
const bounds = L.latLngBounds(corner1, corner2);
map.setMaxBounds(bounds);
        map.on('drag', function() {
        map.panInsideBounds(bounds, { animate: false });
    });

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    minZoom: 2,
	maxZoom: 15,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
 }).addTo(map);

    

    // var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
	// var osmAttrib = 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
	// var osm = new L.TileLayer(osmUrl, {
	    
    //     attribution: osmAttrib,
    //     maxBounds: bounds,
    //     maxBoundsViscosity: 1.0
    // });
    
    // osm.addTo(map);

console.log(items);

var iconoBase = L.Icon.extend({
		options: {
			iconSize:     [24, 24],
			// iconAnchor:   [16, 87],
			popupAnchor:  [0, -6]
		}
	});
 
	var iconoVideo = new iconoBase({iconUrl: url+'images/icons/youtube24.png'}),
		iconoRojo = new iconoBase({iconUrl: 'rojo.png'}),
		iconoAzul = new iconoBase({iconUrl: 'azul.png'});
        
    var marcadores = L.markerClusterGroup();

for (i = 0; i < items.length; i++) {
    marcadores.addLayer(L.marker([items[i].lat, items[i].lon],{icon: iconoVideo}).bindPopup("<div class='relative w-60 md:w-1/2'><img src='"+url+"images/miniatures/"+ items[i].link +".jpg' alt='' class='z-0 object-scale-down lg:rounded-l'><a href=\""+url+"video/"+ items[i].slug +"\" class='absolute inset-0 flex items-center transition duration-500 ease-in-out opacity-75 hover:opacity-100'></a\></div>"));
}

map.addLayer(marcadores);
    
</script>

@endsection