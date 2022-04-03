var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  var x;
  x=$(document);
  x.mousemove(moverMouse);
  $(".enlace").hover(entraMouse,saleMouse);
}

function moverMouse(event)
{
  var x;
  x=$("#corx");
  x.text("coordenada x="+event.clientX);
  x=$("#cory");
  x.text("coordenada y="+event.clientY);
}
function entraMouse(){
	$(this).css("color", "rgb(133,181,1)");
}
function saleMouse(){
	$(this).css("color", "rgb(179, 204, 204)");
}
