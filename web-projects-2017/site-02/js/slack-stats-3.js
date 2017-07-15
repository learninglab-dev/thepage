var svg = d3.select("#d3-graphic").append("svg")
	.attr("height","100%")
	.attr("width","100%");


var globalSlack = d3.csv("csv/slack-stats-2.csv", function(data) {
  data.forEach(function(d) {
    d.slacks = +d.slacks;
  });
};

console.log ("hello");
console.log (globalSlack);

//   console.log(data[21]);
//   var newX = 0;
//   svg.selectAll("line")
//   	.data(data)
//   	.enter().append("line")
//   		.attr("x1",0)
//       .attr("x2",function(d,i){
//         return d*2;
//       }
//     )
//   		.attr("y1",function(d,i)
//   			{
//   				return i*3;
//   			})
//         .attr("y2",function(d,i)
//           {
//             return i*3;
//           })
//   		.attr("stroke", "rgba(12,16,230,.3)")
//       .attr("stroke-width", 2);
//
// });
