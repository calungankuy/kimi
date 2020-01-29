<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    //
    public function index()
    {
          $customer = \App\Customer::all();
        return $customer;
    }
    public function show ($id)
    {
        $customer = \App\Customer::find($id);
        return $customer;
    }
    public function store($kode=null,$name=null,$email=null,$country=null,$city=null,$address = null ,$contact_number=null)
    {
        $customer = new Customer();
        $customer->code_customer = $kode;
        $customer->name = $name;
        $customer->email = $email;
        $customer->country = $country;
        $customer->city = $city;
        $customer->address = $address;
        $customer->contact_number = $contact_number;
        $customer->save();
        return $customer;
}
    public function edit($id=NULL,$kode=null,$name=NULL,$email=NULL,$country=NULL,$city=NULL,$address = null,$contact_number=NULL){
        $customer = Customer::find($id);
        $customer->code_customer = $kode;
        $customer->name = $name;
        $customer->email = $email;
        $customer->country = $country;
        $customer->city = $city;
        $customer->address = $address;
        $customer->contact_number = $contact_number;
        return $customer;
}
    public function delete($id){
        $uka = Customer::find($id);
        $uka = delete();

}}
