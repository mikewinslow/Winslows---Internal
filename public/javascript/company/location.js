function Location() {
    
}

Location.prototype.SetAddressOnclickBind = function(element){
    element.click(function(){
	location_id  = $("#location_id").val()
	location    ='/company/location-address/edit/id/0/location_id/'+location_id;
    });
}

Location.prototype.SetPhoneOnclickBind = function(element){
    element.click(function(){
	location_id  = $("#location_id").val()
	location    ='/company/location-phone-number/edit/id/0/location_id/'+location_id;
    });
}


