<%
on error resume next
dim strFrom
dim strBody
dim strTemp
strTemp = trim(request.form("txtBody"))
strFrom = request.form("txtFrom")
if len(strFrom) > 0 then
   strBody = "From: " & strFrom & chr(13) & chr(10)
   strBody = strBody & strTemp
else
   strBody = strTemp
end if

	if len(strTemp) > 4 then
		if err.number = 0 then
			response.write "creating email object<br>"
			Set objCDONTS = CreateObject("CDONTS.NewMail")

			response.write "object created: " & err.number & ", " & err.description & "<br>"
			With objCDONTS
				.From = "visitor@SwansonSoftware.com"
				.To = "greg@swansonsoftware.com"
				.Subject = request.form("txtSubject") & ", To: " & request.form("cboTo")
				.Body = strBody
				.Send
			End With
			Set objCDONTS = Nothing
		end if

	end if

   if err.number = 0 then
      response.redirect "thankyou.php"
   end if
%>
<html>
<head></head>
<body>
<%
response.write "Error: " & err.number & ", " & err.description
%>
</body>
</html>