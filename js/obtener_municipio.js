function seleccionado(val)
{
 $.ajax({
 type: 'post',
 url: '../c_personas/personas_selectmunicipio.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_select").innerHTML=response; 
 }
 });
}

