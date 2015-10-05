function position_delete(url,ask)
{
	if (confirm(ask))
	{
		document.location.href = url;
	}
	return false
}