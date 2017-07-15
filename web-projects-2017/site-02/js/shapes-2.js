console.log("hello");
var dataArray = [5,11,18,32,7,40,13,8,2,5,17,12,37,24,5,11,18,32,7,40,13,8,13,9,7,30,5,11,18,32,7,40,13,8,2,5,17,12,37,24,5,11,18,32,7,40,13,8,13,9,7,30];
console.log(dataArray);
console.log(dataArray[0]);
var svg = d3.select("h1").append("svg")
	.attr("height","150")
	.attr("width","100%");

var newX = 0;
svg.selectAll("circle.first")
	.data(dataArray)
	.enter().append("circle")
		.attr("class","first")
		.attr("cx",function(d,i)
		{
			newX+=(d*2 + 5);
			console.log(i,newX);
			return (newX-d);
		}

			)
		.attr("cy",function(d,i)
			{
				return 50 + d;
			}

			)
		.attr("r", function(d,i)
			{
				return d;
			}

			)
		.attr("fill", "rgba(12,16,230,.3)");

var newX = 0;
svg.selectAll("ellipse.second")
	.data(dataArray)
	.enter().append("ellipse")
		.attr("class","second")
		.attr("cx",function(d,i)
		{
			newX+=(d*2 + 5);
			console.log(i,newX);
			return (newX-d);
		}

			)
		.attr("cy",function (d,i)

				{
					return d + 100;
				}
			)
		.attr("rx", function(d,i)
			{
				return d;
			}

			)
		.attr("ry", function(d,i)
			{
				return 48 - d;
			}

			)
		.attr("fill", "rgba(220,16,50,.3)");

var svg2 = d3.select("#d3-graphic").append("svg")
	.attr("height","700")
	.attr("width","100%");

var newX02 = 0
svg2.selectAll("line")
	.data(dataArray)
	.enter().append("line")
		.attr("x1",0)
		.attr("stroke","rgba(0,25,240,.4")
		.attr("stroke-width","2")
		.attr("x2", function (d)
				{
					return newX02+(d*4);
				})
		.attr("y1", function (d,i)
				{
					return i*3 + 1;
				}

			)
		.attr("y2", function (d,i)
				{
					return i*3 + 1;
				}
				);

svg2.append("text")
	.attr("x",220)
	.attr("y",30)
	.attr("font-size","30")
	.text("D3 TEXT");


for (i = 0; i < 15; i++) {
			svg2.append("line")
				.attr("x1",200)
				.attr("stroke","rgba(0,25,240,.4")
				.attr("stroke-width","2")
				.attr("x2", 200 + i*5)
				.attr("y1", i*5)
				.attr("y2", i*5);
	}


newX03 = 0
newY03 = 200

for (i = 1; i < 101; i++) {
			svg2.append("line")
				.attr("x1",0+newX03)
				.attr("stroke","rgba(255,0,30,.05")
				.attr("stroke-width","1")
				.attr("x2", (101-i)*2)
				.attr("y1", i*2+newY03)
				.attr("y2", 0+newY03);
	}
