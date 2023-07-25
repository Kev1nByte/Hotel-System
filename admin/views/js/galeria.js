//Borrar imagen galería

$(".TB").on("click", ".BorrarGaleria", function(){

	var Gid = $(this).attr("Gid");
	var Gimagen = $(this).attr("Gimagen");

	window.location = "index.php?url=galeria&Gid="+Gid+"&Gimagen="+Gimagen;

})