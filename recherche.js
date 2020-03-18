function myFunction(){
	//declaration de variable
	var inpute, filter, table, tr, td, i, txtValue;

    inpute = document.getElementById('myInput');
    console.log(inpute.value);
	filter = inpute.value;
	table = document.getElementById('tbodi');
	tr = table.getElementsByTagName('tr');

	//la boucle parcours le tableau 
	//et cache les elements qui ne son pas rechercher

	for (i = 0; i < tr.length; i++) {
            if (tr[i]) {
                txtValue = tr[i].textContent || tr[i].innerText;
                if (txtValue.match(filter)) {
                    tr[i].style.display = "";
                }
                else{
                    tr[i].style.display = "none";
                }
            }
	}
} 