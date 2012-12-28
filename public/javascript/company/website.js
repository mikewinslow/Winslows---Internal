function Website()
{
    
}

Website.prototype.ViewOnclickBind = function(element)
{
    element.click(function(e)
    {
	button = $(e.target);
	location='/website/view/id/' + button.parent().attr("website_id");
    });
}

Website.prototype.AddMenuOnclickBind = function(element)
{
    element.click(function(e)
    {
	button = $(e.target);
	location='/website-menu/edit/id/0/website_id/' + $("#website_id").val();
    });
}

Website.prototype.AddRoleOnclickBind = function(element)
{
    element.click(function(e)
    {
	button = $(e.target);
	location='/website-role/edit/id/0/website_id/' + $("#website_id").val();
    });
}

Website.prototype.CleanResourcesOnclickBind = function(element)
{
    element.click(function()
    {
	location='/website-resource/clean/';
    });
}

Website.prototype.BuildResourcesOnclickBind = function(element)
{
    element.click(function()
    {
	website_id = $("#website_id").val();
	location='/website-resource/build/website_id/' + website_id;
    });
}

