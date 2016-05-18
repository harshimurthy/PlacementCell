function ShowDivHome() {
    document.getElementById("HomeDiv").style.display = 'block';
	document.getElementById("CoursesDiv").style.display = 'none';
	document.getElementById("DeptDiv").style.display = 'none';
	document.getElementById("ContactDiv").style.display = 'none';
		document.getElementById("CompanyDiv").style.display = 'none';
		document.getElementById("CreditsDiv").style.display = 'none';
}
function ShowDivDept() {
    document.getElementById("DeptDiv").style.display = 'block';
		document.getElementById("HomeDiv").style.display = 'none';
	document.getElementById("CoursesDiv").style.display = 'none';
	document.getElementById("ContactDiv").style.display = 'none';
		document.getElementById("CompanyDiv").style.display = 'none';
			document.getElementById("CreditsDiv").style.display = 'none';
}
function ShowDivCourses() {
    document.getElementById("CoursesDiv").style.display = 'block';
		document.getElementById("DeptDiv").style.display = 'none';
	document.getElementById("HomeDiv").style.display = 'none';
	document.getElementById("CompanyDiv").style.display = 'none';
	document.getElementById("ContactDiv").style.display = 'none';
		document.getElementById("CreditsDiv").style.display = 'none';
}
function ShowDivCompany() {
    document.getElementById("CompanyDiv").style.display = 'block';
	document.getElementById("CoursesDiv").style.display = 'none';
	document.getElementById("DeptDiv").style.display = 'none';
	document.getElementById("HomeDiv").style.display = 'none';
	document.getElementById("ContactDiv").style.display = 'none';
		document.getElementById("CreditsDiv").style.display = 'none';
}
function ShowDivContact()
{
	document.getElementById("ContactDiv").style.display = 'block';
	document.getElementById("CompanyDiv").style.display = 'none';
	document.getElementById("CoursesDiv").style.display = 'none';
	document.getElementById("DeptDiv").style.display = 'none';
	document.getElementById("HomeDiv").style.display = 'none';
	document.getElementById("CreditsDiv").style.display = 'none';
}
function ShowDivCredits()
{
	document.getElementById("CreditsDiv").style.display = 'block';
	document.getElementById("ContactDiv").style.display = 'none';
	document.getElementById("CompanyDiv").style.display = 'none';
	document.getElementById("CoursesDiv").style.display = 'none';
	document.getElementById("DeptDiv").style.display = 'none';
	document.getElementById("HomeDiv").style.display = 'none';
}