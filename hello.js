document.getElementById("homes").click();

function openCity(evt, cityName) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(cityName).style.display = "block";
	evt.currentTarget.className += " active";
} // JavaScript Document
function promptbox() {
	var company_name = prompt("Please enter your Company name", "");

	if (company_name != null) {
		document.getElementById("company_name").value = company_name;

	}


}
document.getElementById("company_name").value = "";
document.getElementById("address").value = "";
document.getElementById("brn").value = "";
document.getElementById("website").value = "";
document.getElementById("customer_name").value = "";
document.getElementById("contact_name").value = "";
document.getElementById("email").value = "";
document.getElementById("contact_no").value = "";
document.getElementById("customers_name").value = "";
document.getElementById("date").value = "";
document.getElementById("type").value = "";
document.getElementById("outcome").value = "";
document.getElementById("sales_person_name").value = "";

function validate() {

	if (document.form.company_name.value == "") {
		alert("missing company name");
	}
	if (document.form.address.value == "") {
		alert("missing address");
	}
	if (document.form.brn.value == "") {
		alert("missing brn");
	}
	if (document.form.website.value == "") {
		alert("missing website");
	}

}

function validate_contact() {
	if (document.form1.customer_name.value == "") {
		alert("missing customer name");
	}
	if (document.form1.contact_name.value == "") {
		alert("missing contact name");
	}
	if (document.form1.email.value == "") {
		alert("missing email");
	}
	if (document.form1.contact_no.value == "") {
		alert("missing contact number");
	}
}

function validate_activity() {
	if (document.form2.customers_name.value == "") {
		alert("missing customer name");
	}
	if (document.form2.date.value == "") {
		alert("missing date");
	}
	if (document.form2.type.value == "") {
		alert("missing type");
	}
	if (document.form2.outcome.value == "") {
		alert("missing outcome");
	}
	if (document.form2.sales_person_name.value == "") {
		alert("missing sales person name");
	}
}