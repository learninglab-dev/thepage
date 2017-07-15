function setup() {
  createCanvas(1080,960);
  strokeWeight(2);
  stroke(20,20,40,20);
    background(255,255,255);
}


function draw() {

  stroke (mouseX/2,0,230);
  ellipse(mouseX, mouseY, 80, 70);
  strokeJoin(ROUND);
  // triangle(mouseX/2, mouseY*1.1, 120, 400, 800, 700);
}
