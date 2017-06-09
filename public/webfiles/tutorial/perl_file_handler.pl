#########################################################
##                                                     ##
##  My clever little .pl script to remove white spaces ##
##  at the beginning of lines in a text file!!!        ##
##                                                     ##
#########################################################


$file = 'pf.cir';		# Name the file
open(INFO, $file);		# Open the file
@lines = <INFO>;		# Read it into an array
close(INFO);	
open(INFO, ">$file");		# Open the file

foreach $line (@lines)
{
while ($line =~ (/^\s/)) 
{
    $line =~ s/\s//; 
}
print INFO "$line";
}
close INFO;


