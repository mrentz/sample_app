#########################################################
##                                                     ##
##            Read Directory file list                 ##
##                                                     ##
#########################################################


$location = "$ARGV[$0]";
opendir(DIR, "$location");
@files = grep(/\.JPG$/,readdir(DIR));
closedir(DIR);

$file = 'temp1.htm';		# Name the file
open(INFO, ">$file");		# Open the file


print INFO
'
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">

<html>
    <head>
   <title>';
print INFO @files." Image files contained in $location";
print INFO '</title>
    </head>
    <body>
   <p>

<!-- INSERT : Basic Table Template -->

<TABLE BORDER CELLSPACING="1" CELLPADDING="1" WIDTH="100%">
<TR VALIGN="Top">
</TR>' ;

$i = 1;
$max_lines = 0;
# print all the filenames in our array

#while ($max_lines <= 5) {
foreach $line (@files) {
if ($max_lines < 20){ 
 	 if ($i == 1){
	     print INFO "<TR>\n";
	     &embed_image($location, $line);
	     $i = ++$i;}	
 elsif ($i == 3){
	     &embed_image($location, $line);
	     print INFO "</TR>\n";
	 $i = 1;}
	 else {
	     &embed_image($location, $line);
	     $i = ++$i;}	
$max_lines = $max_lines + 1;
     }
}
sub embed_image
{
    print INFO "<TD><IMG SRC= \"$_[0]/$_[1]\n\"";
    print INFO "WIDTH=\"277\" HEIGHT=\"auto\"";
    print INFO "$line></div> </TD>\n";
}

print "@files\n";
print @files."\n";
print "$location\n";
print $location."\n";
