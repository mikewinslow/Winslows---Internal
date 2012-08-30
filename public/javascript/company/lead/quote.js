function Quote() {
    
}

Quote.prototype.ViewItemOnClickBind = function(element)
{
    element.click(function(e)
    {
	button = $(e.target);
	
	location = "/company/lead-quote-item/view/id/"+button.attr("item_id");
    })
}

Quote.prototype.AddItemOnClickBind = function(element)
{
    element.click(function()
    {	
	location = "/company/lead-quote-item/edit/id/0/quote_id/"+$("#quote_id").val();
    })
}

Quote.prototype.PrintOnClickBind = function(element)
{
    element.click(function(e)
    {
	console.log("Print")
    })
}

Quote.prototype.SellOnClickBind = function(element)
{
    element.click(function(e)
    {
	location = "/company/lead-quote/sales-type/id/" + $("#quote_id").val();
    })
}