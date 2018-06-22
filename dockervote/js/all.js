var element_count = 0;

function add_element()
{
 element_count++;
 document.getElementById("vote").innerHTML+='<input type="text" name="option"+element_count value=""></br>';
}