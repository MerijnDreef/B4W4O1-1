<?php

function index()
{
	render("home/index");	
}
function create(){
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker
    render('home/create');
}

function store(){
    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database
    $createReserve = createReserve($_POST);
    //2. Bouw een url op en redirect hierheen
   header('location: ' . URL . 'home/index');
}

function edit($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    
    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
	
	$paarden = getEmployee($id);
    render('home/update', array('reservering' => $paarden));

}

function update(){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    $updateEmployee = updateEmployee($_POST);
    //2. Bouw een url en redirect hierheen
    header('location: ' . URL . 'home/index');
}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $employees = getEmployee($id);
    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
    render('home/delete', array('reservering' => $paarden));
}

function destroy($id){
    //1. Delete een medewerker uit de database
    $deleteEmployee = deleteEmployee($id);
	//2. Bouw een url en redirect hierheen
    header('location: ' . URL . 'employee/index');
}