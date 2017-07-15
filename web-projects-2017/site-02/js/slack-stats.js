var parseDate = d3.timeParse("%Y%m%d");
console.log ("start");
d3.csv("csv/slack-stats-2.csv")
    .row(function(d){ return {day: parseDate(d.day),
          slacks:Number(d.slacks)};  })
    .get(function(error,data){

      var svg2 = d3.select("#d3-graphic").append("svg2")
                  .attr("height","100%")
                  .attr("width","100%");
      svg2.selectAll("rect")
        .data(data)
        .enter()
          .append("rect")
          .attr("width", 2)
          .attr("height", function (d)
              {
                return d.slacks;
              })
          .attr("y", function (d,i){return i;})
          .attr("x", 200)
          .attr("fill", "rgba(250,40,40,.5)");


    });

      // svg2.selectAll("line")
      // 	.data(d.slacks)
      // 	.enter().append("line")
      // 		.attr("x1",0)
      // 		.attr("stroke","rgba(0,25,240,.4")
      // 		.attr("stroke-width","2")
      // 		.attr("x2", function (d.slacks)
      // 				{
      // 					return newX02+(d*4);
      // 				})
      // 		.attr("y1", function (d,i)
      // 				{
      // 					return i*3 + 1;
      // 				}
      //
      // 			)
      // 		.attr("y2", function (d,i)
      // 				{
      // 					return i*3 + 1;
      // 				}
      // 				);
