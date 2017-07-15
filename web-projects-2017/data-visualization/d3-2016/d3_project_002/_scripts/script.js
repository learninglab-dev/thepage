console.log ("test");

d3.selectAll(".item")
    .attr('font-size', '2em');

var bardataTwo = [20, 40, 170, 278, 120, 42, 88, 290, 176, 20, 40, 89, 42, 288, 70, 200, 290, 176, 20, 40, 70, 200, 120, 42, 23, 357, 176, 20, 40, 170, 278, 120, 42, 88, 290, 176, 20, 40, 89, 42, 288, 70, 200, 290, 176, 20, 40, 70, 200, 120, 42, 23, 357, 176];

var bardata =[];
var tempHeight;
var newHeight;

for (var i=0; i<200; i++) {
    bardata.push(Math.random()*10)

}

var height = 250,
    mirrorHeight = 250,
    width = 600,
    barWidth = 50,
    barOffset = -7;

var yScale = d3.scale.linear()
        .domain ([0, d3.max(bardata)])
        .range ([0, height]);

var xScale = d3.scale.ordinal ()
        .domain(d3.range(0, bardata.length))
        .rangeBands([0, width]);

var colors = d3.scale.linear()
        .domain ([0, bardata.length])
        .range (['#1177dd', "#ddD100"]);

topChart = d3.select('#headerGraphic').append('svg')
    .attr('width', width)
    .attr('height', height)
  /*  .style('background', 'rgba(220,220,220,.8)') */
    .selectAll('rect').data(bardata)
    .enter().append('rect')
 .style('fill', function(d,i){
            return colors(i)
})
  /*  .style('fill', 'rgba(70,70,70,.5)') */
        .attr('width', xScale.rangeBand())
        .attr('height', function(d) {
            return yScale(d);
    })
    .attr('x', function(d,i) {
        return xScale(i);
    })
    .attr('y', function(d,i) {
        return (height-yScale(d));
    })


    .on('mouseover', function(d){
           /* tempHeight =    d3.select(this).attr("height");
    console.log("tempHeight = " + tempHeight);
    newHeight = (parseFloat(tempHeight) + 200);
     console.log("newHeight = " + newHeight); */
            d3.select(this)
                .style('opacity', 1)
                .attr('height', 300);
})
        .on('mouseout', function(d) {
            d3.select(this)
                .transition().duration(2000)
                .style('opacity', .5)
                .attr('height', tempHeight);

})

/* mirror image */

var colorsMirror = d3.scale.linear()
        .domain ([0, bardata.length])
        .range (['#dd1133', "#ddD100"]);

d3.select('#postHeader').append('svg')
    .attr('width', width)
    .attr('height', mirrorHeight)
  /*  .style('background', 'rgba(220,220,220,.8)') */
    .selectAll('rect').data(bardata)
    .enter().append('rect')
 .style('fill', function(d,i){
            return colorsMirror(i)
})
  /*  .style('fill', 'rgba(70,70,70,.5)') */
        .attr('width', xScale.rangeBand())
        .attr('height', function(d) {
            return yScale(d);
    })
    .attr('x', function(d,i) {
        return xScale(i);
    })
    /* .attr('y', function(d,i) {
        return (height-yScale(d));
    }) */

        .attr('y', "0px")
