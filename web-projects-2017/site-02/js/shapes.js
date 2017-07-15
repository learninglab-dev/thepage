console.log("hello");
var dataArray = [5,11,18,32,7,40,13,8,2,5,17,12,37,24,13,9,7];
console.log(dataArray);
console.log(dataArray[0]);
var svg = d3.select("body").append("svg")
	.attr("height","150")
	.attr("width","100%");
console.log(svg);
/*
svg.selectAll("rect")
	.data(dataArray)
	.enter().append("rect")
	.attr("height", function(d,i){
		return d*10;
	})
	.attr("width","15")
	.attr("x",function(d,i){
		return i*20;	
	})
	.attr("y","100")
	.attr("fill","rgba(12,16,230,.3)")
	;
*/
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
		.attr("fill", "rgba(220,16,20,.3)");


/*
var newX = 0;
svg.selectAll("rect.pedestal")
	.data(dataArray)
	.enter().append("rect")
		.attr("class","pedestal")
		.attr("height", function(d,i){
			return 200 - 2*d;
			})
		.attr("width","15")
		.attr("x",function(d,i){
			return i*20;	
			})
		.attr("y",function(d,i)
			{
				return 190 - 2*d;
			}
			)
		.attr("fill","rgba(12,16,230,.3)")
	;

*/



		/*
		.attr("cx",function(d,i)
		{	
			newX+=(d*2 + 5);
			console.log(i,newX);
			return (newX-d);
		}

			)
		.attr("cy",function (d,i)

				{
					return 50 + 2*d;
				}
			)
		.attr("rx", function(d,i)
			{
				return d;
			}

			)
		.attr("ry","25")
		.attr("fill", "rgba(220,16,20,.3)");

*/



	/*
	https://docs.google.com/spreadsheets/d/1K13J5kWyNhZeQ37GNeZJ4B4Fs1lG6xLQXll49eEE8ac/pub?output=csv 
	*/
