




@extends('layouts.website')
@section('content')

<style>
	.btn_accordian{
		color:black;
		width: 	100%;
		text-align:left;
		font-weight: 	bold;
	}

	.btn_accordian:hover{
		border:0px solid white!important;
		text-decoration:none!important;
	}

	</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			
			<div class="row">
				<div class="col-md-12 p-5 text-center">
					<span style="font-size: 	45px;" class="text-dark">Best Voyage Pvt</span><span style="font-size: 	45px;" class="text-danger">.Ltd.</span>
				</div>
				<div class="col-md-12 p-5 ">
					<p style="color:black;font-size:16px;">We take extreme pleasure in introducing ourselves as an award-winning travel Company. While we are based in Ahmedabad, our tour& travel services know no boundaries.</p>
				</div>
				<div class="col-md-12 font-weight-bold "style="font-size:25px;">Hi! Welcome To Best Voyage Pvt.Ltd.</div>
				<div class="col-md-12 mt-5 ">
					<p class="p-5">Best Voyage Pvt Ltd, Was Established In 2000, With Head Office At Ahmedabad, Now In 2020 we have  7 Branch Offices Across Major Cities In Gujarat. We Carry Almost Two Decades Of Experience In All Aspects Of Highly ‘Personalized Travel’ For International & Domestic Holidays To Our Passenger. We Are One Of The Few Organizations That Can Offer Worldwide Tour Packages With Flexible And Efficient Solutions. The Number Of Passengers Serviced Annually Today, Is More Than Ten Times Higher Than That We Serviced On Annual Basis When We First Started Up in 2000. Through Continuous Investments In Contemporary Travel Related Technology And Quality Assurance, Best Voyage Pvt. Ltd. Has Positioned Itself Today As One Of The Leading Travel Agency In Gujarat. </p>

					<p class="p-5">
						Our Website www.bestvoyage.in has more than 460 Quality Tours Offering Worldwide Destinations. Our Range Of Tours Is Created By Our Certified Specialists With Years Of Experience And After In-Depth Destination Research. These Include: Group Tours, Tailor made Tours, Self-Drive Holidays, Honeymoon Specials, Safari Holidays, Cruising And Special ‘Hot-Deals’.
					</p>
				</div>
			</div>




<div class="row">
	<div class="col-md-12 jumbotron p-5 " style=>
  
		<div class="accordion" id="accordionExample">

  @foreach($services as $service)
  <div class="card">
    <div class="card-header p-0 m-0 " id="headingOne" >
      <h4 class="mb-0 ">
        <button class="btn btn_accordian btn-link" type="button" data-toggle="collapse" data-target="#id_{{$service->id}}" aria-expanded="true" aria-controls="id_{{$service->id}}">
        {{$service->title}}
        </button>
      </h4>
    </div>

    <div id="id_{{$service->id}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body" style="font-size: 14px;padding:20px;">
      
      
         {!! html_entity_decode($service->description) !!}
      </div>
    </div>
  </div>
@endforeach






















































  <div class="card">
    <div class="card-header p-0 m-0 " id="headingOne" >
      <h4 class="mb-0 ">
        <button class="btn btn_accordian btn-link" type="button" data-toggle="collapse" data-target="#div_7" aria-expanded="true" aria-controls="div_7">
      HAPPY TRAVELLERS WITH US 
        </button>
      </h4>
    </div>

    <div id="div_7" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <!-- HTML -->
<div id="chart_1" class="m-0 p-0 " style="height: 500px;width: 100%;"></div>
      </div>
    </div>
  </div>




  <div class="card">
    <div class="card-header p-0 m-0 " id="headingOne" >
      <h4 class="mb-0 ">
        <button class="btn btn_accordian btn-link" type="button" data-toggle="collapse" data-target="#div_8" aria-expanded="true" aria-controls="div_8">
         OUR NETWORKS 
        </button>
      </h4>
    </div>

    <div id="div_8" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
       <div id="chart_2" class="m-0 p-0 " style="height: 500px;width: 100%;"></div>
      </div>
    </div>
  </div>

  




</div>
	</div>
</div>


		</div>
		<div class="col-md-2"></div>

	</div>
</div>



<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>




<script src="https://www.amcharts.com/lib/4/maps.js"></script>
<script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end


var chart = am4core.create("chart_1", am4charts.XYChart);

chart.data = [{
 "country": "USA",
 "tours": 2025,

}, {
 "country": "China",
 "tours": 1882,

}, {
 "country": "Japan",
 "tours": 1809,

}, {
 "country": "Germany",
 "tours": 1322,

}, {
 "country": "UK",
 "tours": 1122,

}, {
 "country": "France",
 "tours": 1114,

}, {
 "country": "India",
 "tours": 984
,
}, {
 "country": "Spain",
 "tours": 711
,
}, {
 "country": "Netherlands",
 "tours": 665
,
}, {
 "country": "Russia",
 "tours": 580
,
}, {
 "country": "South Korea",
 "tours": 443
,
}, {
 "country": "Canada",
 "tours": 441
,
}];

chart.padding(40, 40, 40, 40);

var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.dataFields.category = "country";
categoryAxis.renderer.minGridDistance = 60;
categoryAxis.renderer.inversed = true;
categoryAxis.renderer.grid.template.disabled = true;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.min = 0;
valueAxis.extraMax = 0.1;
//valueAxis.rangeChangeEasing = am4core.ease.linear;
//valueAxis.rangeChangeDuration = 1500;

var series = chart.series.push(new am4charts.ColumnSeries());
series.dataFields.categoryX = "country";
series.dataFields.valueY = "tours";
series.tooltipText = "{valueY.value}"
series.columns.template.strokeOpacity = 0;
series.columns.template.column.cornerRadiusTopRight = 10;
series.columns.template.column.cornerRadiusTopLeft = 10;
//series.interpolationDuration = 1500;
//series.interpolationEasing = am4core.ease.linear;
var labelBullet = series.bullets.push(new am4charts.LabelBullet());
labelBullet.label.verticalCenter = "bottom";
labelBullet.label.dy = -10;
labelBullet.label.text = "{values.valueY.workingValue.formatNumber('#.')}";

chart.zoomOutButton.disabled = true;

// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
series.columns.template.adapter.add("fill", function (fill, target) {
 return chart.colors.getIndex(target.dataItem.index);
});

setInterval(function () {
 am4core.array.each(chart.data, function (item) {
   item.tours += Math.round(Math.random() * 200 - 100);
   item.tours = Math.abs(item.tours);
 })
 chart.invalidateRawData();
}, 2000)

categoryAxis.sortBySeries = series;

}); // end am4core.ready()
</script>





<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create map instance
var chart = am4core.create("chart_2", am4maps.MapChart);

var interfaceColors = new am4core.InterfaceColorSet();

// Set map definition
chart.geodata = am4geodata_worldLow;

// Set projection
chart.projection = new am4maps.projections.Mercator();

// Export
chart.exporting.menu = new am4core.ExportMenu();

// Zoom control
chart.zoomControl = new am4maps.ZoomControl();

// Data for general and map use
var originCities = [
    {
        "id": "london",
        "title": "London",
        "destinations": ["vilnius", "reykjavik", "lisbon", "moscow", "belgrade", "ljublana", "madrid", "stockholm", "bern", "kiev", "new york"],
        "latitude": 51.5002,
        "longitude": -0.1262,
        "scale": 1.5,
        "zoomLevel": 2.74,
        "zoomLongitude": -20.1341,
        "zoomLatitude": 49.1712
    },
    {
        "id": "vilnius",
        "title": "Vilnius",
        "destinations": ["london", "brussels", "prague", "athens", "dublin", "oslo", "moscow", "bratislava", "belgrade", "madrid"],
        "latitude": 54.6896,
        "longitude": 25.2799,
        "scale": 1.5,
        "zoomLevel": 4.92,
        "zoomLongitude": 15.4492,
        "zoomLatitude": 50.2631
    }
];

var destinationCities = [{
    "id": "brussels",
    "title": "Brussels",
    "latitude": 50.8371,
    "longitude": 4.3676
}, {
    "id": "prague",
    "title": "Prague",
    "latitude": 50.0878,
    "longitude": 14.4205
}, {
    "id": "athens",
    "title": "Athens",
    "latitude": 37.9792,
    "longitude": 23.7166
}, {
    "id": "reykjavik",
    "title": "Reykjavik",
    "latitude": 64.1353,
    "longitude": -21.8952
}, {
    "id": "dublin",
    "title": "Dublin",
    "latitude": 53.3441,
    "longitude": -6.2675
}, {
    "id": "oslo",
    "title": "Oslo",
    "latitude": 59.9138,
    "longitude": 10.7387
}, {
    "id": "lisbon",
    "title": "Lisbon",
    "latitude": 38.7072,
    "longitude": -9.1355
}, {
    "id": "moscow",
    "title": "Moscow",
    "latitude": 55.7558,
    "longitude": 37.6176
}, {
    "id": "belgrade",
    "title": "Belgrade",
    "latitude": 44.8048,
    "longitude": 20.4781
}, {
    "id": "bratislava",
    "title": "Bratislava",
    "latitude": 48.2116,
    "longitude": 17.1547
}, {
    "id": "ljublana",
    "title": "Ljubljana",
    "latitude": 46.0514,
    "longitude": 14.5060
}, {
    "id": "madrid",
    "title": "Madrid",
    "latitude": 40.4167,
    "longitude": -3.7033
}, {
    "id": "stockholm",
    "title": "Stockholm",
    "latitude": 59.3328,
    "longitude": 18.0645
}, {
    "id": "bern",
    "title": "Bern",
    "latitude": 46.9480,
    "longitude": 7.4481
}, {
    "id": "kiev",
    "title": "Kiev",
    "latitude": 50.4422,
    "longitude": 30.5367
}, {
    "id": "paris",
    "title": "Paris",
    "latitude": 48.8567,
    "longitude": 2.3510
}, {
    "id": "new york",
    "title": "New York",
    "latitude": 40.43,
    "longitude": -74
}];

// Default to London view
//chart.homeGeoPoint = { "longitude": originCities[0].zoomLongitude, "latitude": originCities[0].zoomLatitude };
//chart.homeZoomLevel = originCities[0].zoomLevel;

var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";
var planeSVG = "m2,106h28l24,30h72l-44,-133h35l80,132h98c21,0 21,34 0,34l-98,0 -80,134h-35l43,-133h-71l-24,30h-28l15,-47";

// Texts
var labelsContainer = chart.createChild(am4core.Container);
labelsContainer.isMeasured = false;
labelsContainer.x = 80;
labelsContainer.y = 27;
labelsContainer.layout = "horizontal";
labelsContainer.zIndex = 10;

var plane = labelsContainer.createChild(am4core.Sprite);
plane.scale = 0.15;
plane.path = planeSVG;
plane.fill = am4core.color("#cc0000");

var title = labelsContainer.createChild(am4core.Label);
title.text = "Flights from London";
title.fill = am4core.color("#cc0000");
title.fontSize = 20;
title.valign = "middle";
title.dy = 2;
title.marginLeft = 15;

var changeLink = chart.createChild(am4core.TextLink);
changeLink.text = "Click to change origin city";
changeLink.isMeasured = false;

changeLink.events.on("hit", function() {
    if (currentOrigin == originImageSeries.dataItems.getIndex(0)) {
        showLines(originImageSeries.dataItems.getIndex(1));
    }
    else {
        showLines(originImageSeries.dataItems.getIndex(0));
    }
})

changeLink.x = 142;
changeLink.y = 72;
changeLink.fontSize = 13;


// The world
var worldPolygonSeries = chart.series.push(new am4maps.MapPolygonSeries());
worldPolygonSeries.useGeodata = true;
worldPolygonSeries.fillOpacity = 0.6;
worldPolygonSeries.exclude = ["AQ"];

// Origin series (big targets, London and Vilnius)
var originImageSeries = chart.series.push(new am4maps.MapImageSeries());

var originImageTemplate = originImageSeries.mapImages.template;

originImageTemplate.propertyFields.latitude = "latitude";
originImageTemplate.propertyFields.longitude = "longitude";
originImageTemplate.propertyFields.id = "id";

originImageTemplate.cursorOverStyle = am4core.MouseCursorStyle.pointer;
originImageTemplate.nonScaling = true;
originImageTemplate.tooltipText = "{title}";

originImageTemplate.setStateOnChildren = true;
originImageTemplate.states.create("hover");

originImageTemplate.horizontalCenter = "middle";
originImageTemplate.verticalCenter = "middle";

var originHitCircle = originImageTemplate.createChild(am4core.Circle);
originHitCircle.radius = 11;
originHitCircle.fill = interfaceColors.getFor("background");

var originTargetIcon = originImageTemplate.createChild(am4core.Sprite);
originTargetIcon.fill = interfaceColors.getFor("alternativeBackground");
originTargetIcon.strokeWidth = 0;
originTargetIcon.scale = 1.3;
originTargetIcon.horizontalCenter = "middle";
originTargetIcon.verticalCenter = "middle";
originTargetIcon.path = targetSVG;

var originHoverState = originTargetIcon.states.create("hover");
originHoverState.properties.fill = chart.colors.getIndex(1);

// when hit on city, change lines
originImageTemplate.events.on("hit", function(event) {
    showLines(event.target.dataItem);
})

// destination series (small targets)
var destinationImageSeries = chart.series.push(new am4maps.MapImageSeries());
var destinationImageTemplate = destinationImageSeries.mapImages.template;

destinationImageTemplate.nonScaling = true;
destinationImageTemplate.tooltipText = "{title}";
destinationImageTemplate.fill = interfaceColors.getFor("alternativeBackground");
destinationImageTemplate.setStateOnChildren = true;
destinationImageTemplate.states.create("hover");

destinationImageTemplate.propertyFields.latitude = "latitude";
destinationImageTemplate.propertyFields.longitude = "longitude";
destinationImageTemplate.propertyFields.id = "id";

var destinationHitCircle = destinationImageTemplate.createChild(am4core.Circle);
destinationHitCircle.radius = 7;
destinationHitCircle.fillOpacity = 1;
destinationHitCircle.fill = interfaceColors.getFor("background");

var destinationTargetIcon = destinationImageTemplate.createChild(am4core.Sprite);
destinationTargetIcon.scale = 0.7;
destinationTargetIcon.path = targetSVG;
destinationTargetIcon.horizontalCenter = "middle";
destinationTargetIcon.verticalCenter = "middle";

originImageSeries.data = originCities;
destinationImageSeries.data = destinationCities;

// Line series
var lineSeries = chart.series.push(new am4maps.MapLineSeries());
lineSeries.mapLines.template.line.strokeOpacity = 0.5;

chart.events.on("ready", function() {
    showLines(originImageSeries.dataItems.getIndex(0));
})


var currentOrigin;

function showLines(origin) {

    var dataContext = origin.dataContext;
    var destinations = dataContext.destinations;
    // clear old
    lineSeries.mapLines.clear();
    lineSeries.toBack();
    worldPolygonSeries.toBack();

    currentOrigin = origin;

    if (destinations) {
        for (var i = 0; i < destinations.length; i++) {
            var line = lineSeries.mapLines.create();
            line.imagesToConnect = [origin.mapImage.id, destinations[i]];
        }
    }

    title.text = "Flights from " + dataContext.title;

    chart.zoomToGeoPoint({ latitude: dataContext.zoomLatitude, longitude: dataContext.zoomLongitude }, dataContext.zoomLevel, true);
}

var graticuleSeries = chart.series.push(new am4maps.GraticuleSeries());
graticuleSeries.mapLines.template.line.strokeOpacity = 0.05;


}); // end am4core.ready()
</script>

<!-- HTML -->
<div id="chart_2"></div>


@endsection
