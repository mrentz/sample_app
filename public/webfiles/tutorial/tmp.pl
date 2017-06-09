#c:\program files\perl\ActivePerl-5.8.8.819-MSWin32-x86-267479\perl\bin

$location = "$ARGV[$0]";
opendir(DIR, "$location");
@files = grep(/\.jpg$/,readdir(DIR));
closedir(DIR);

print @files."\n";
