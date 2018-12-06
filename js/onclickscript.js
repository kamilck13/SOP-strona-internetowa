var panel = document.getElementById("panel");
var list = document.getElementById("wniosek");
var doc = document.getElementsByClassName("clickme");
var nagl = document.getElementsByClassName("list-group-item disabled");
var wniosekbutton = document.getElementsByClassName("onclick");


var newContent='<form><h1>Wybierz plik o rozszerzeniu .pdf</h1><div class="form-group"><label for="exampleFormControlFile1">Example file input</label><input type="file" class="form-control-file" id="exampleFormControlFile1"></div></form>';

var oldContent = doc[0].innerHTML;
list.addEventListener("click", function(){
	
	doc[0].innerHTML=newContent;
	nagl[0].innerText = "Wyślij wniosek";
	wniosekbutton[0].classList.toggle("active");
	panel.classList.remove("active");


});

panel.addEventListener("click", function(){

	doc[0].innerHTML = oldContent;
	wniosekbutton[0].classList.remove("active");
	panel.classList.toggle("active");
	nagl[0].innerText = "Panel pracownika";

})


$('#myList a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})