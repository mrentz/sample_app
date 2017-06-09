@echo off
:LOOP
Set /P putfile=Enter filename to upload^>
Echo File name is %putfile%
Set /P putdir=Enter directory to upload to^>
Echo File name is %putdir%
Set /P localdir=Enter directory to upload from^>
Echo File name is %localdir%
::Set /P answ=Enter Y to proceed or you are prompted again^>
::If /I not "%answ%."=="Y." GoTo :LOOP
::cd c:\ftp_temp

> my.ftp echo o 203.26.24.82
>> my.ftp echo mrentz
>> my.ftp echo reilly
::>> my.ftp echo bin
::>> my.ftp echo cd audit_dumps
>> my.ftp echo cd /%putdir%
>> my.ftp echo lcd %localdir%
>> my.ftp echo put %putfile%
>> my.ftp echo pwd
>> my.ftp echo dir
>> my.ftp echo bye
Set putfile=
Set answ=
ftp -s:my.ftp
::End_Of_Batch

::If /I... GoTo :LOOP fits just ONE line. 