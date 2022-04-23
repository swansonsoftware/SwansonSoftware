/* File: debug.js
 * -----------------------------------------------------------------
 */

 
var _dbgWindow = null;
var _errWindow = null;

/*
 * Function: debug(sMsg)
 * Description:
 *   debug() opens a window to write out error information. If the
 *   window is already open, it will write to it in subsequent calls.
 */
function debug(sMsg)
{

	if ((_dbgWindow == null) || (_dbgWindow.closed))
	{
		var sParams = dbg_getWindowSetup(600,100);
		_dbgWindow = window.open("","debuger",sParams);
		_dbgWindow.document.open("text/plain");
	} else {
		sMsg = "\n" + sMsg;
	}

	_dbgWindow.document.write(sMsg);
	
	return true;
}


/*
 * Function: errorOut(msg, sURL, sLineNumber)
 * Description:
 *   errorOut() writes javascript error information to a new window.
 *   This function improves on the error information displayed by
 *   the browser by including the page that is causing the error.
 *   The browser's popup error messages do not indicate which page
 *   generated the error in a multi-frame site.
 *   
 *   Setup: note the call to 'window.onerror = errorOut;' below the
 *   function. This allows you to include this file and view debug
 *   information without having to setup the error event.
 */
function errorOut(sMsg, sURL, sLineNumber)
{
	if ((_errWindow == null) || (_errWindow.closed))
	{ 
		var sParams = dbg_getWindowSetup(600,100);
		_errWindow = window.open("","errors",sParams);
		_errWindow.document.open("text/html");
	} else {
		sMsg = "<br><br>" + sMsg;
	}
	
	var sBugInfo;

	sBugInfo = "Error: " + sMsg + ", Line: " + sLineNumber + "<BR>Page: " + sURL;

	_errWindow.document.write(sBugInfo);
	
	return true;
}

window.onerror = errorOut;

/*
 * Function dbg_getWindowSetup(intWidth, intHeight)
 * Description:
 *   Sets window parameters for resolution independence.
 *   If the user's screen resolution does not allow
 *   the window to fit on the screen, the window size is
 *   calculated based on the input parameters.
 */
function dbg_getWindowSetup(intWidth, intHeight)
{
	if (screen.width < 1024)
	{
		var window_height= screen.height - screen.height / 4;
		var window_width = screen.width - screen.width / 8;
	} else {
		var window_width = intWidth;
		var window_height = intHeight;
	}

	var window_top = (screen.height-window_height)/2;
	var window_left = (screen.width-window_width)/2;

	var strParams = "resizable=yes,";
	strParams += "scrollbars=yes,";
	strParams += "width=" + window_width + ",";
	strParams += "height=" + window_height + ",";
	strParams += "top=" + window_top + ",";
	strParams += "left=" + window_left;

	return strParams;

}
