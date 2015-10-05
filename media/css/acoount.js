function position_delete(url,ask)
{
	if (confim(ask))
	{
		document.location.href = url;
	}
	return false
}