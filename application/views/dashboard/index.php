
	<!-- Summary -->

	<div class="summary">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-4 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_content">
							<h6>Tweet count Last Week</h6>
							<p><h2><?php echo $tweet_count; ?></h2></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_content">
							<div class="mb-3">
								<h6>Positive score : </h6>
								<h3><?php echo $positive_score; ?></h3>
							</div>
							<h6>Negative score : </h6>
							<h3><?php echo $negative_score; ?></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_content">
							<h6>UAE HAPPINESS INDEX</h6>
							<div id="gaugechart"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Compare Cities Per Emotion -->
	<p><?php echo $this->lang->line('come'); ?></p>
	<div class="blogs">
		<div class="container blogs_container">
			<div class="chart_box">
				<div class="row">
					<div class="col">
						<div class="section_title">
							<h4>Compare Cities Per Emotion</h4>
						</div>
					</div>				
				</div>
				<div class="row  mt-3" >
					<div class="col-lg-12 radio_group" id="city_emo">
						<label class = "checkbox-inline">
							<input type = "radio" name = "optionsRadiosinline" id = "city_emo_score" value = "score" checked>Scores
						</label>				
						<label class = "checkbox-inline">
							<input type = "radio" name = "optionsRadiosinline" id = "city_emo_count" value = "count">Counts
						</label>
					</div>			
				</div>
				<div class="row mt-3">
					<div class="col-lg-12">
						<div id="emobarchart"></div>
					</div>
				</div>
			</div>
			<div class="chart_box mt-3">
				<div class="row ">
					<div class="col">
						<div class="section_title">
							<h4>Emotion Percentages Per City For Lask Week</h4>
						</div>
					</div>
				</div>
				<div class="row  mt-3" >
					<div class="col-lg-12 radio_group" id="emo_percentages">
						<label class = "checkbox-inline">
							<input type = "radio" name = "optionsRadios" id = "emo_percentages_score" value = "score" checked>Scores
						</label>				
						<label class = "checkbox-inline">
							<input type = "radio" name = "optionsRadios" id = "emo_percentages_count" value = "count">Counts
						</label>
					</div>			
				</div>
				<div class="row mt-3">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-4">
								<div id="emopiechart1_title"></div>
								<div id="emopiechart1"></div>
							</div>
							<div class="col-lg-4">
								<div id="emopiechart2_title"></div>
								<div id="emopiechart2"></div>
							</div>
							<div class="col-lg-4">
								<div id="emopiechart3_title"></div>
								<div id="emopiechart3"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 offset-lg-2">
								<div id="emopiechart4_title"></div>
								<div id="emopiechart4"></div>
							</div>
							<div class="col-lg-4">
								<div id="emopiechart5_title"></div>
								<div id="emopiechart5"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="chart_box mt-3">
				<div class="row">
					<div class="col">
						<div class="section_title">
							<h4>Emotion Time Line Per City</h4>
						</div>
					</div>
				</div>
				<div class="row  mt-3" >
					<div class="col-lg-12 radio_group" id="emo_time_line">
						<label class = "checkbox-inline">
							<input type = "radio" name = "optionsRadios1" id = "emo_time_score" value = "score" checked>Scores
						</label>				
						<label class = "checkbox-inline">
							<input type = "radio" name = "optionsRadios1" id = "emo_time_count" value = "count">Counts
						</label>
					</div>			
				</div>
				<div class="row mt-3">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-12">
								<div id="emolinechart1_title" style="padding-left: 15px;"></div>
								<div id="emolinechart1"></div>
							</div>
							<div class="col-lg-12"> 
								<div id="emolinechart2_title" style="padding-left: 15px;"></div>
								<div id="emolinechart2"></div>
							</div>
							<div class="col-lg-12">
								<div id="emolinechart3_title" style="padding-left: 15px;"></div>
								<div id="emolinechart3"></div>
							</div>
							<div class="col-lg-12">
								<div id="emolinechart4_title" style="padding-left: 15px;"></div>
								<div id="emolinechart4"></div>
							</div>
							<div class="col-lg-12">
								<div id="emolinechart5_title" style="padding-left: 15px;"></div>
								<div id="emolinechart5"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="chart_box mt-3">
				<div class="row">
					<div class="col">
						<div class="section_title">
							<h4>Compare languages for each feeling for the last week:</h4>
						</div>
					</div>				
				</div>
				<div class="row  mt-3" >
					<div class="col-lg-12 radio_group" id="lang_emo">
						<label class = "checkbox-inline">
							<input type = "radio" name = "optionsRadio2" id = "lang_emo_score" value = "score" checked>Scores
						</label>				
						<label class = "checkbox-inline">
							<input type = "radio" name = "optionsRadio2" id = "lang_emo_count" value = "count">Counts
						</label>
					</div>			
				</div>
				<div class="row mt-3">
					<div class="col-lg-12">
						<div id="langbarchart"></div>
					</div>
				</div>
			</div>
			<div class="chart_box mt-3">
				<div class="row ">
					<div class="col">
						<div class="section_title">
							<h4>Compare feelings for last week per language(Scores):</h4>
						</div>
					</div>
				</div>
				<div class="row  mt-3" >
					<div class="col-lg-12 radio_group" id="lang_percentages">
						<label class = "checkbox-inline">
							<input type = "radio" name = "optionsRadios3" id = "lang_percentages_score" value = "score" checked>Scores
						</label>				
						<label class = "checkbox-inline">
							<input type = "radio" name = "optionsRadios3" id = "lang_percentages_count" value = "count">Counts
						</label>
					</div>			
				</div>
				<div class="row mt-3">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-4">
								<div id="langpiechart1_title" style="padding-left: 15px;"></div>
								<div id="langpiechart1"></div>
							</div>
							<div class="col-lg-4">
								<div id="langpiechart2_title" style="padding-left: 15px;"></div>
								<div id="langpiechart2"></div>
							</div>
							<div class="col-lg-4">
								<div id="langpiechart3_title" style="padding-left: 15px;"></div>
								<div id="langpiechart3"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<div id="langpiechart4_title" style="padding-left: 15px;"></div>
								<div id="langpiechart4"></div>
							</div>
							<div class="col-lg-4">
								<div id="langpiechart5_title" style="padding-left: 15px;"></div>
								<div id="langpiechart5"></div>
							</div>
							<div class="col-lg-4">
								<div id="langpiechart6_title" style="padding-left: 15px;"></div>
								<div id="langpiechart6"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
			
<script>
	var city_lastweek_norms = <?php echo json_encode($city_lastweek_norms)?>;
	var city_lastweek_counts = <?php echo json_encode($city_lastweek_counts)?>;
	var city_daily_norms = <?php echo json_encode($city_daily_norms)?>;
	var city_daily_counts = <?php echo json_encode($city_daily_counts)?>;
	var lang_lastweek_norms = <?php echo json_encode($lang_lastweek_norms)?>;
	var lang_lastweek_counts = <?php echo json_encode($lang_lastweek_counts)?>;	
	var positive_score=<?php echo $positive_score ?>;
	var negative_score=<?php echo $negative_score ?>;	
	Compare_Cities_per_emotion(city_lastweek_norms);
	emotion_percentages_city(city_lastweek_norms);	
	emotion_line_city(city_daily_norms);
	compare_langeages_bar(lang_lastweek_norms);
	lang_percentages_city(lang_lastweek_norms);
	gauge_chart(positive_score, negative_score);
		/* bar chart redraw */
	$("#city_emo .checkbox-inline input").on("click", function(e){
			$( "#emobarchart" ).html('');		
		if($("#city_emo_score")[0].checked==true){
									
			Compare_Cities_per_emotion(city_lastweek_norms);
		}else{			
			Compare_Cities_per_emotion(city_lastweek_counts);
		}		
	
	});	
	/* pie chart redraw */
	$("#emo_percentages .checkbox-inline input").on("click", function(e){
			$( "#emopiechart1_title" ).html('');
			$( "#emopiechart2_title" ).html('');
			$( "#emopiechart3_title" ).html('');
			$( "#emopiechart4_title" ).html('');
			$( "#emopiechart5_title" ).html('');
			$( "#emopiechart1" ).html('');	
			$( "#emopiechart2" ).html('');
			$( "#emopiechart3" ).html('');
			$( "#emopiechart4" ).html('');
			$( "#emopiechart5" ).html('');		
		if($("#emo_percentages_score")[0].checked==true){
			
			emotion_percentages_city(city_lastweek_norms);
		}else{			
			emotion_percentages_city(city_lastweek_counts);
		}	
	});	
		/* line chart redraw */
	$("#emo_time_line .checkbox-inline input").on("click", function(e){
			$( "#emolinechart1_title" ).html('');
			$( "#emolinechart2_title" ).html('');
			$( "#emolinechart3_title" ).html('');
			$( "#emolinechart4_title" ).html('');
			$( "#emolinechart5_title" ).html('');
			$( "#emolinechart1" ).html('');	
			$( "#emolinechart2" ).html('');
			$( "#emolinechart3" ).html('');
			$( "#emolinechart4" ).html('');
			$( "#emolinechart5" ).html('');		
		if($("#emo_time_score")[0].checked==true){
			emotion_line_city(city_daily_norms);
		}else{			
			emotion_line_city(city_daily_counts);
		}	
	});	
	/* lang bar chart redraw */
	$("#lang_emo .checkbox-inline input").on("click", function(e){
		$( "#langbarchart" ).html('');		
		if($("#lang_emo_score")[0].checked==true){									
			compare_langeages_bar(lang_lastweek_norms);
		}else{			
			compare_langeages_bar(lang_lastweek_counts);
		}		
	
	});	
	/* lang pie chart redraw */
	$("#lang_percentages .checkbox-inline input").on("click", function(e){
			$( "#langpiechart1_title" ).html('');
			$( "#langpiechart2_title" ).html('');
			$( "#langpiechart3_title" ).html('');
			$( "#langpiechart4_title" ).html('');
			$( "#langpiechart5_title" ).html('');
			$( "#langpiechart6_title" ).html('');
			$( "#langpiechart1" ).html('');	
			$( "#langpiechart2" ).html('');
			$( "#langpiechart3" ).html('');
			$( "#langpiechart4" ).html('');
			$( "#langpiechart5" ).html('');	
			$( "#langpiechart6" ).html('');		
		if($("#lang_percentages_score")[0].checked==true){
			
			lang_percentages_city(lang_lastweek_norms);
		}else{			
			lang_percentages_city(lang_lastweek_counts);
		}	
	});	
function Compare_Cities_per_emotion(data){
	
	var graphData = [], graphColumns = [];
	
	var sortData = d3.values(d3.nest().key(function (d) { return d.emogroup; }).object(data));		
		sortData.forEach(function (d,i) {
			var record = {};			
			d.forEach(function (dd) { 				
				switch (dd.emogroup) {
					case ":)":
						record['_emogroup'] = "smile";
						break;
					case ":(":
						record['_emogroup'] = "frown";
						break;
					case ";)":
						record['_emogroup'] = "wink";
						break;
					case ":'(":
						record['_emogroup'] = "crying";
						break;
					case ":|":
						record['_emogroup'] = "neutral";
						break;
					case ":D":
						record['_emogroup'] = "grin";
						break;
				}
				if($("#city_emo_score")[0].checked==true){
					record[dd.search_city] = +dd.emo_normalized;
				}else{
					record[dd.search_city] = +dd.emo_count;
				}
				
				if(i == 0) graphColumns.push(dd.search_city);
			})
			graphData.push(record);		
		});	

		graphData.columns = graphColumns;
		drawChart(graphData);
	
		
	function drawChart (gData) { 
		var margin = {top: 20, right: 30, bottom: 30, left: 60},
			width = $("#emobarchart").width() - margin.left - margin.right,
			height = 400 - margin.top - margin.bottom;
			
		var	svg = d3.select("#emobarchart").append("svg")
					.attr("width", width + margin.left + margin.right)
					.attr("height", height + margin.top + margin.bottom),
			g =  svg.append("g")
					.attr("transform", "translate(" + margin.left + "," + margin.top + ")")

		var x0 = d3.scaleBand()
			.rangeRound([0, width])
			.paddingInner(0.1);

		var x1 = d3.scaleBand()
			.padding(0.05);

		var y = d3.scaleLinear()
			.rangeRound([height, 0]);

		var z = d3.scaleOrdinal(d3.schemeCategory10);
		
		var keys = gData.columns;
	  
		x0.domain(gData.map(function(d) { return d._emogroup; }));
		x1.domain(keys).rangeRound([0, x0.bandwidth()]);
		y.domain([d3.min(gData, function(d) { return d3.min(keys, function(key) { return d[key]; }); }),
					d3.max(gData, function(d) { return d3.max(keys, function(key) { return d[key]; }); })]).nice();

					
		g.append("g")
			.selectAll("g")
			.data(gData)
			.enter().append("g")
			  .attr("transform", function(d) { return "translate(" + x0(d._emogroup) + ",0)"; })
			.selectAll("rect")
			.data(function(d) { return keys.map(function(key) { return {key: key, value: d[key]}; }); })
			.enter().append("rect")
			  .attr("x", function(d) { return x1(d.key); })
			  .attr("y", function(d) { return y(Math.max(0, d.value)); })
			  .attr("width", x1.bandwidth())
			  .attr("height", function(d) { return Math.abs(y(d.value) - y(0)); })
			  .attr("fill", function(d) { return z(d.key); });

		g.append("g")
			.attr("class", "x axis")
			.attr("transform", "translate(0," + height/2 + ")")
			.call(d3.axisBottom(x0));
	  
		g.selectAll('.image')
			.data(gData)
		  .enter().append('image')
			.attr('xlink:href', function(d) {
				return 'asset/images/emoticons/' + d._emogroup + '.png';
			})
			.attr('height', '20px')
			.attr('width', '20px')
			.attr('x', function(d) { return x0(d._emogroup)+(width-margin.left-margin.right)/((gData.length+1)*2); })
			.attr('y', function(d) { return height+10; })
		

		g.append("g")
			.attr("class", "y axis")
			.call(d3.axisLeft(y))
		 

		var legend = g.append("g")
			.attr("font-family", "sans-serif")
			.attr("font-size", 12)
			.attr("text-anchor", "end")
		  .selectAll("g")
			.data(keys.slice().reverse())
		  .enter().append("g")
			.attr("transform", function(d, i) { return "translate(0," + i * 20 + ")"; });

		legend.append("rect")
			.attr("x", width-10)
			.attr("width", 19)
			.attr("height", 19)
			.attr("fill", z);

		legend.append("text")
			.attr("x", width-15)
			.attr("y", 9.5)
			.attr("dy", "0.32em")
			.text(function(d) { return d; });
		}
}
	/* piechart */
function emotion_percentages_city(data){	
	var sortData = d3.values(d3.nest().key(function (d) { return d.search_city; }).object(data));
		sortData.forEach(function (d,i) { 
			i = i+1;
			drawEmoPieChart(d, i);
		});	
	function getWidthOfText(txt, fontname, fontsize){
		if(getWidthOfText.c === undefined){
			getWidthOfText.c=document.createElement('canvas');
			getWidthOfText.ctx=getWidthOfText.c.getContext('2d');
		}
		getWidthOfText.ctx.font = fontsize + ' ' + fontname;
		return getWidthOfText.ctx.measureText(txt).width;
	}
	
	function drawEmoPieChart(data, idx){ 
		var width = height = $("#emopiechart"+idx).width();
		var padding = 20;
		var opacity = .8;
		var sumValue = 0;
		var pieTitle = "";
		
		data.forEach(function (d,i) {  
			if(i==0) pieTitle = d.search_city;
			if($("#emo_percentages_score")[0].checked==true){
					d.emo_normalized = +d.emo_normalized;
					sumValue += d.emo_normalized;
				}else{
					d.emo_count = +d.emo_count;
					sumValue += d.emo_count;
				}
			
		});	
		
		var radius = Math.min(width-padding, height-padding) / 2;
		var color = d3.scaleOrdinal(d3.schemeCategory10);

		var arc = d3.arc()
			.innerRadius(0)
			.outerRadius(radius-30);
		
		var labelArc = d3.arc()
			.outerRadius(radius - 70)
			.innerRadius(radius - 70);

		var pie = d3.pie()
			.value(function(d) { 
				if($("#emo_percentages_score")[0].checked==true){
					return d.emo_normalized;
				}else{
					return d.emo_count;
				}  })
			.sort(null);
	
		var svg_title = d3.select("#emopiechart"+idx+"_title")
			.append('svg')
			.attr('class', 'pie-title')
			.attr('width', width)
			.attr('height', 50)
		  .append("text")
			.attr("x", (width-getWidthOfText(pieTitle.toUpperCase(),"sans-serif",20)*2)/2)
			.attr("y", 50)
			.text(pieTitle.toUpperCase());
			
		var svg = d3.select("#emopiechart"+idx)
			.append('svg')
			.attr('class', 'pie')
			.attr('width', width)
			.attr('height', height)
		  .append('g')
			.attr('transform', 'translate(' + (width/2) + ',' + (height/2) + ')');

		var g = svg.selectAll(".arc")
			.data(pie(data))
		  .enter().append("g")
			.attr("class", "arc");

		g.append("path")
			.attr("d", arc)
			.attr('fill', (d,i) => color(i))
			.style('opacity', opacity)
			.style('stroke', 'white');
		
		g.append("text")
			.attr("transform", function(d) { return "translate(" + labelArc.centroid(d) + ")"; })
			.attr("dx", "-1.15em")
			.attr("dy", ".35em")
			.text(function(d) { 
				if($("#emo_percentages_score")[0].checked==true){
					return Math.round(d.data['emo_normalized']*100/sumValue) + "%";
				}else{
					return Math.round(d.data['emo_count']*100/sumValue) + "%";
				} 
			 });
			
		//if(idx == 5) {
			var legendG = svg.selectAll(".legend")
				.data(pie(data))
				.enter().append("g")
				.attr("transform", function(d,i){
					return "translate(" + (radius-30) + "," + (i * 25 - radius) + ")";
				})
				.attr("class", "legend");   
			
			legendG.append("rect")
				.attr("width", 15)
				.attr("height", 15)
				.attr("fill", function(d, i) {
					return color(i);
				});
			
			legendG.append('image')
				.attr('xlink:href', function(d) {
					var emoname = "";
					switch (d.data.emogroup) {
						case ":)":
							emoname = "smile";
							break;
						case ":(":
							emoname = "frown";
							break;
						case ";)":
							emoname = "wink";
							break;
						case ":'(":
							emoname = "crying";
							break;
						case ":|":
							emoname = "neutral";
							break;
						case ":D":
							emoname = "grin";
							break;
					}
					return 'asset/images/emoticons/'+emoname+'.png';
				})
				.attr('height', '20px')
				.attr('width', '20px')
				.attr("y", -2)
				.attr("x", 20);
	}
}
/* line chart */
function emotion_line_city(data){	
		// parse the date / time
		var parseTime = d3.timeParse("%Y-%m-%d");
		
		// format the data
		data.forEach(function(d) {
			if(parseTime(d.created_day)==null){
				d.created_day=d.created_day;
			}else{
				d.created_day = parseTime(d.created_day);
			}			
			
		});
	
		var sortData = d3.values(d3.nest().key(function (d) { return d.search_city; }).object(data));
		sortData.forEach(function (d,i) { 
			var sortData1 = d3.values(d3.nest().key(function (dd) { return dd.created_day; }).object(d));
			
			var chartData = [];
			sortData1.forEach(function (dd) { 
				var tmpData = {"search_city":"","date":"","smile":0,"frown":0,"wink":0,"crying":0,"neutral":0,"grin":0,};
				dd.forEach(function (ddd) { 
					switch (ddd.emogroup) {
						case ":)":
							ddd.emogroup = "smile";
							break;
						case ":(":
							ddd.emogroup = "frown";
							break;
						case ";)":
							ddd.emogroup = "wink";
							break;
						case ":'(":
							ddd.emogroup = "crying";
							break;
						case ":|":
							ddd.emogroup = "neutral";
							break;
						case ":D":
							ddd.emogroup = "grin";
							break;
					}
					
					tmpData.search_city = ddd.search_city;
					tmpData.date = ddd.created_day;
					if($("#emo_time_score")[0].checked==true){
						tmpData[ddd.emogroup] = +ddd.emo_normalized;
					}else{			
						tmpData[ddd.emogroup] = +ddd.emo_count;
					}	
				})
				chartData.push(tmpData);
			})
			i = i+1;
			drawEmoLineChart(chartData, i);
		});			
	

	
	function drawEmoLineChart(data, idx){
		var title = d3.keys(d3.nest().key(function (d) { return d.search_city; }).object(data));
	
		$("#emolinechart"+idx+"_title").html("<h5>"+title[0].toUpperCase()+"</h5>");
		
		var margin = {top: 20, right: 50, bottom: 30, left: 50},
			width = $("#emolinechart"+idx).width(); - margin.left - margin.right,
			height = 300 - margin.top - margin.bottom;
	
		// set the ranges
		var x = d3.scaleTime().range([0, width-margin.left-margin.right]);
		var y = d3.scaleLinear().range([height, 0]);

		// define the 1st line
		var valueline = d3.line()
			.x(function(d) { return x(d.date); })
			.y(function(d) { return y(d.wink); });
		// define the 2nd line
		var valueline2 = d3.line()
			.x(function(d) { return x(d.date); })
			.y(function(d) { return y(d.crying); });
		// define the 3nd line
		var valueline3 = d3.line()
			.x(function(d) { return x(d.date); })
			.y(function(d) { return y(d.frown); });
		// define the 4nd line
		var valueline4 = d3.line()
			.x(function(d) { return x(d.date); })
			.y(function(d) { return y(d.smile); });
		// define the 5nd line
		var valueline5 = d3.line()
			.x(function(d) { return x(d.date); })
			.y(function(d) { return y(d.neutral); });
		// define the 5nd line
		var valueline6 = d3.line()
			.x(function(d) { return x(d.date); })
			.y(function(d) { return y(d.grin); });		
		var svg = d3.select("#emolinechart"+idx).append("svg")
			.attr("width", width + margin.left + margin.right)
			.attr("height", height + margin.top + margin.bottom)
		  .append("g")
			.attr("transform",
				  "translate(" + margin.left + "," + margin.top + ")");
		
		// Scale the range of the data
		x.domain(d3.extent(data, function(d) { return d.date; }));
		y.domain([0, d3.max(data, function(d) { return Math.max(d.smile, d.frown, d.wink, d.crying, d.neutral, d.grin); })]);

		// Add the valueline path.
		svg.append("path").data([data]).attr("class", "line").style("stroke", "#1f77b4").attr("d", valueline);
		// Add the valueline2 path.
		svg.append("path").data([data]).attr("class", "line").style("stroke", "#ff7f0e").attr("d", valueline2);
		// Add the valueline3 path.
		svg.append("path").data([data]).attr("class", "line").style("stroke", "#2ca02c").attr("d", valueline3);
		// Add the valueline4 path.
		svg.append("path").data([data]).attr("class", "line").style("stroke", "#d62728").attr("d", valueline4);
		// Add the valueline5 path.
		svg.append("path").data([data]).attr("class", "line").style("stroke", "#9467bd").attr("d", valueline5);
		// Add the valueline6 path.
		svg.append("path").data([data]).attr("class", "line").style("stroke", "#8c564b").attr("d", valueline6);

		// Add the X Axis
		svg.append("g")
			.attr("transform", "translate(0," + height + ")")
			.call(d3.axisBottom(x));

		// Add the Y Axis
		svg.append("g")
			.call(d3.axisLeft(y));
			
		var legendG = svg.append("g").attr("transform", "translate(0,0)").attr("class", "legend");  
			
			legendG.append("rect").attr("width", 15).attr("height", 15).attr("fill", "#1f77b4").attr("x", width-margin.right-50).attr("y", 10);
			legendG.append("rect").attr("width", 15).attr("height", 15).attr("fill", "#ff7f0e").attr("x", width-margin.right-50).attr("y", 35);
			legendG.append("rect").attr("width", 15).attr("height", 15).attr("fill", "#2ca02c").attr("x", width-margin.right-50).attr("y", 60);
			legendG.append("rect").attr("width", 15).attr("height", 15).attr("fill", "#d62728").attr("x", width-margin.right-50).attr("y", 85);
			legendG.append("rect").attr("width", 15).attr("height", 15).attr("fill", "#9467bd").attr("x", width-margin.right-50).attr("y", 110);
			legendG.append("rect").attr("width", 15).attr("height", 15).attr("fill", "#8c564b").attr("x", width-margin.right-50).attr("y", 135);
			
			legendG.append('image').attr('href','asset/images/emoticons/wink.png').attr('height', '20px').attr('width', '20px').attr("y", 7).attr("x", width-margin.right-30);
			legendG.append('image').attr('href','asset/images/emoticons/crying.png').attr('height', '20px').attr('width', '20px').attr("y", 32).attr("x", width-margin.right-30);
			legendG.append('image').attr('href','asset/images/emoticons/frown.png').attr('height', '20px').attr('width', '20px').attr("y", 57).attr("x", width-margin.right-30);
			legendG.append('image').attr('href','asset/images/emoticons/smile.png').attr('height', '20px').attr('width', '20px').attr("y", 82).attr("x", width-margin.right-30);
			legendG.append('image').attr('href','asset/images/emoticons/neutral.png').attr('height', '20px').attr('width', '20px').attr("y", 107).attr("x", width-margin.right-30);
			legendG.append('image').attr('href','asset/images/emoticons/grin.png').attr('height', '20px').attr('width', '20px').attr("y", 132).attr("x", width-margin.right-30);

	}

}
/* languages bar chart */
function compare_langeages_bar(data){
	
	var graphData = [], graphColumns = [];
	
	var sortData = d3.values(d3.nest().key(function (d) { return d.emogroup; }).object(data));		
		sortData.forEach(function (d,i) {
			var record = {};			
			d.forEach(function (dd) { 				
				switch (dd.emogroup) {
					case ":)":
						record['_emogroup'] = "smile";
						break;
					case ":(":
						record['_emogroup'] = "frown";
						break;
					case ";)":
						record['_emogroup'] = "wink";
						break;
					case ":'(":
						record['_emogroup'] = "crying";
						break;
					case ":|":
						record['_emogroup'] = "neutral";
						break;
					case ":D":
						record['_emogroup'] = "grin";
						break;
				}
				if($("#lang_emo_score")[0].checked==true){
					record[dd.lang] = +dd.emo_normalized;
				}else{
					record[dd.lang] = +dd.emo_count;
				}
				
				if(i == 0) graphColumns.push(dd.lang);
			})
			graphData.push(record);		
		});	
		
		graphData.columns = graphColumns;
		drawChart(graphData);	
		
	function drawChart (gData) { 
		var margin = {top: 20, right: 30, bottom: 30, left: 60},
			width = $("#langbarchart").width() - margin.left - margin.right,
			height = 400 - margin.top - margin.bottom;
			
		var	svg = d3.select("#langbarchart").append("svg")
					.attr("width", width + margin.left + margin.right)
					.attr("height", height + margin.top + margin.bottom),
			g =  svg.append("g")
					.attr("transform", "translate(" + margin.left + "," + margin.top + ")")

		var x0 = d3.scaleBand()
			.rangeRound([0, width])
			.paddingInner(0.1);

		var x1 = d3.scaleBand()
			.padding(0.05);

		var y = d3.scaleLinear()
			.rangeRound([height, 0]);

		var z = d3.scaleOrdinal(d3.schemeCategory10);
		
		var keys = gData.columns;
	  
		x0.domain(gData.map(function(d) { return d._emogroup; }));
		x1.domain(keys).rangeRound([0, x0.bandwidth()]);
		y.domain([d3.min(gData, function(d) { return d3.min(keys, function(key) { return d[key]; }); }),
					d3.max(gData, function(d) { return d3.max(keys, function(key) { return d[key]; }); })]).nice();

					
		g.append("g")
			.selectAll("g")
			.data(gData)
			.enter().append("g")
			  .attr("transform", function(d) { return "translate(" + x0(d._emogroup) + ",0)"; })
			.selectAll("rect")
			.data(function(d) { return keys.map(function(key) { return {key: key, value: d[key] ? d[key] :0 }; }); })
			.enter().append("rect")
			  .attr("x", function(d) { return x1(d.key); })
			  .attr("y", function(d) { return y(Math.max(0, d.value)); })
			  .attr("width", x1.bandwidth())
			  .attr("height", function(d) { return Math.abs(y(d.value) - y(0)); })
			  .attr("fill", function(d) { return z(d.key); });

		g.append("g")
			.attr("class", "x axis")
			.attr("transform", "translate(0," + height/2 + ")")
			.call(d3.axisBottom(x0));
	  
		g.selectAll('.image')
			.data(gData)
		  .enter().append('image')
			.attr('xlink:href', function(d) {
				return 'asset/images/emoticons/' + d._emogroup + '.png';
			})
			.attr('height', '20px')
			.attr('width', '20px')
			.attr('x', function(d) { return x0(d._emogroup)+(width-margin.left-margin.right)/((gData.length+1)*2); })
			.attr('y', function(d) { return height+10; })

		g.append("g")
			.attr("class", "y axis")
			.call(d3.axisLeft(y))

		var legend = g.append("g")
			.attr("font-family", "sans-serif")
			.attr("font-size", 12)
			.attr("text-anchor", "end")
		  .selectAll("g")
			.data(keys.slice().reverse())
		  .enter().append("g")
			.attr("transform", function(d, i) { return "translate(0," + i * 20 + ")"; });

		legend.append("rect")
			.attr("x", width-10 )
			.attr("width", 19)
			.attr("height", 19)
			.attr("fill", z);

		legend.append("text")
			.attr("x", width-15 )
			.attr("y", 9.5)
			.attr("dy", "0.32em")
			.text(function(d) { return d; });
		}
}
	/* lang pie chart */
		/* piechart */
function lang_percentages_city(data){	
	var sortData = d3.values(d3.nest().key(function (d) { return d.lang; }).object(data));
		sortData.forEach(function (d,i) { 
			i = i+1;
			drawEmoPieChart(d, i);
		});	
	function getWidthOfText(txt, fontname, fontsize){
		if(getWidthOfText.c === undefined){
			getWidthOfText.c=document.createElement('canvas');
			getWidthOfText.ctx=getWidthOfText.c.getContext('2d');
		}
		getWidthOfText.ctx.font = fontsize + ' ' + fontname;
		return getWidthOfText.ctx.measureText(txt).width;
	}
	
	function drawEmoPieChart(data, idx){ 
		var width = height = $("#langpiechart"+idx).width();
		var padding = 20;
		var opacity = .8;
		var sumValue = 0;
		var pieTitle = "";
		
		data.forEach(function (d,i) {  
			if(i==0) pieTitle = d.lang;
			if($("#lang_percentages_score")[0].checked==true){
					d.emo_normalized = +d.emo_normalized;
					sumValue += d.emo_normalized;
				}else{
					d.emo_count = +d.emo_count;
					sumValue += d.emo_count;
				}
			
		});			
		var radius = Math.min(width-padding, height-padding) / 2;
		var color = d3.scaleOrdinal(d3.schemeCategory10);

		var arc = d3.arc()
			.innerRadius(0)
			.outerRadius(radius-30);
		
		var labelArc = d3.arc()
			.outerRadius(radius - 70)
			.innerRadius(radius - 70);

		var pie = d3.pie()
			.value(function(d) { 
				if($("#lang_percentages_score")[0].checked==true){
					return d.emo_normalized;
				}else{
					return d.emo_count;
				}  })
			.sort(null);
	
		var svg_title = d3.select("#langpiechart"+idx+"_title")
			.append('svg')
			.attr('class', 'pie-title')
			.attr('width', width)
			.attr('height', 50)
		  .append("text")
			.attr("x", (width-getWidthOfText(pieTitle.toUpperCase(),"sans-serif",20)*2)/2)
			.attr("y", 50)
			.text(pieTitle.toUpperCase());
			
		var svg = d3.select("#langpiechart"+idx)
			.append('svg')
			.attr('class', 'pie')
			.attr('width', width)
			.attr('height', height)
		  .append('g')
			.attr('transform', 'translate(' + (width/2) + ',' + (height/2) + ')');

		var g = svg.selectAll(".arc")
			.data(pie(data))
		  .enter().append("g")
			.attr("class", "arc");

		g.append("path")
			.attr("d", arc)
			.attr('fill', (d,i) => color(i))
			.style('opacity', opacity)
			.style('stroke', 'white');
		
		g.append("text")
			.attr("transform", function(d) { return "translate(" + labelArc.centroid(d) + ")"; })
			.attr("dx", "-1.15em")
			.attr("dy", ".35em")
			.text(function(d) { 
				if($("#lang_percentages_score")[0].checked==true){
					return Math.round(d.data['emo_normalized']*100/sumValue) + "%";
				}else{
					return Math.round(d.data['emo_count']*100/sumValue) + "%";
				} 
			 });
			
		//if(idx == 5) {
			var legendG = svg.selectAll(".legend")
				.data(pie(data))
				.enter().append("g")
				.attr("transform", function(d,i){
					return "translate(" + (radius-30) + "," + (i * 25 - radius) + ")";
				})
				.attr("class", "legend");   
			
			legendG.append("rect")
				.attr("width", 15)
				.attr("height", 15)
				.attr("fill", function(d, i) {
					return color(i);
				});
			
			legendG.append('image')
				.attr('xlink:href', function(d) {
					var emoname = "";
					switch (d.data.emogroup) {
						case ":)":
							emoname = "smile";
							break;
						case ":(":
							emoname = "frown";
							break;
						case ";)":
							emoname = "wink";
							break;
						case ":'(":
							emoname = "crying";
							break;
						case ":|":
							emoname = "neutral";
							break;
						case ":D":
							emoname = "grin";
							break;
					}
					return 'asset/images/emoticons/'+emoname+'.png';
				})
				.attr('height', '20px')
				.attr('width', '20px')
				.attr("y", -2)
				.attr("x", 20);
	}
}
	/* gauge chart */
function gauge_chart(positive_score, negative_score){
	var width = 200, height = 110, margin = 15, n = 30, radius = width/2 - (margin*2), needleRad  = 3, pi = Math.PI, halfPi = pi/2,
        endAngle = pi/2, startAngle = -endAngle, data = d3.range(startAngle, endAngle, pi/n), _data = data.slice(0), tt = 3000,
        scale = d3.scaleLinear().range([startAngle, endAngle]),
        colorScale = d3.scaleSequential(d3.interpolateRdYlGn).domain([data[0], data[data.length-1]]),
        svg = d3.select("#gaugechart").append('svg')
			.attr('width', width)
			.attr('height', height)
		  .append('g').attr('transform', 'translate(' + width/2 + ',' + (height-margin) + ')');

    _data.push(endAngle);

    var arc = d3.arc()
        .innerRadius(radius - (radius/3.5))
        .outerRadius(radius)
        .startAngle(function(d) { return d; })
        .endAngle(function(d, i) { return _data[i + 1]; });

    var slice = svg.append('g').selectAll('path.slice').data(data);

    slice
        .enter()
        .append('path')
        .attr('class', 'slice')
        .attr('d', arc)
        .attr('fill', function(d) { return colorScale(d); });

    var needle = svg.append('g').append('path').attr('class', 'needle').attr('fill-opacity', .7).attr('stroke', 'black');
    var text   = svg.append('g').append('text').attr('class', 'text').attr('text-anchor', 'middle').attr('dy', '-0.45em').classed('monospace', true);

	var legendG = svg.append("g").attr("transform", "translate(" + (- width/2) + "," + (-height) + ")").attr("class", "legend");   
		
		legendG.append('image').attr('href','asset/images/emoticons/frown.png').attr('height', '20px').attr('width', '20px').attr("y", 80).attr("x", 5);
		legendG.append('image').attr('href','asset/images/emoticons/wink.png').attr('height', '20px').attr('width', '20px').attr("y", 36).attr("x", 32);
		legendG.append('image').attr('href','asset/images/emoticons/neutral.png').attr('height', '20px').attr('width', '20px').attr("y", 15).attr("x", 90);
		legendG.append('image').attr('href','asset/images/emoticons/smile.png').attr('height', '20px').attr('width', '20px').attr("y", 36).attr("x", 148);
		legendG.append('image').attr('href','asset/images/emoticons/grin.png').attr('height', '20px').attr('width', '20px').attr("y", 80).attr("x", 175);
			
    function update(oldValue, newValue){
        needle
            .datum({ oldValue: oldValue })
            .transition().duration(tt)
            .attrTween('d', lineTween(newValue))
    }

    function transformTween(newValue){
        return function(d){
            var interpolate = d3.interpolate(d.oldValue, newValue);

            return function(t){
                var _in     = interpolate(t) - halfPi,
                    centerX = (radius + 20) * Math.cos(_in),
                    centerY = (radius + 20) * Math.sin(_in);
                return 'translate(' + centerX + ',' + centerY + ')';
            };
        };
    }

    function lineTween(newValue){
        return function(d){

            var interpolate = d3.interpolate(d.oldValue, newValue);

            return function(t){

                var _in = interpolate(t) - halfPi,
                    _im = _in - halfPi,
                    _ip = _in + halfPi;

                var topX = radius * Math.cos(_in),
                    topY = radius * Math.sin(_in);

                var leftX = needleRad * Math.cos(_im),
                    leftY = needleRad * Math.sin(_im);

                var rightX = needleRad * Math.cos(_ip),
                    rightY = needleRad * Math.sin(_ip);

                return d3.line()([[topX, topY], [leftX, leftY], [rightX, rightY]]) + 'Z';
            };
        };
    }
	
    update(scale(0), scale( (positive_score + (1-negative_score))/2));
}
		
</script>