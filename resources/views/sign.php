<?php /* Template Name: CustomPageT1 */ ?>

<?php
   if (isset($_REQUEST['line'])) $line = $_REQUEST['line'];
print '<?xml version="1.0" encoding="ISO-8859-1"?>';
print '<?xml-stylesheet href="wvrs.xsl" type="text/xsl"?>';
?>
<sign version="1.0"
         xmlns:xsd="http://www.w3.org/2001/XMLSchema"
         xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="http://www.wvrs.org/sign.xsd">
        <credit>WVRS</credit>
        <credit_URL>http://wvrs.org/</credit_URL>
        <message>
<?php

#    if ($line == 1) { print "<line1>Firefighters</line1><line2>Needed!</line2>\n"; }
if ($line == 1) { print "<line1>Open House</line1><line2>Sun 10/20 11-4</line2>\n"; }
#    if ($line == 1) { print "<line1>First Aid Car Wash</line1><line2>Sun 9/15 930-330</line2>\n"; }

   if ($line == 2) { print "<line1>test</line1><line2>test2</line2>\n"; }
if ($line == 3) { print "<line1>Shrimp/Oyster</line1><line2>Feast 11/10 1PM</line2>\n";}
#if ($line == 1) { print "<line1>Donate Your Car</line1><line2>for Full Deduction</line2>\n"; }
#if ($line == 2) { print "<line1>Interim Library</line1><line2>Permanently Closed</line2>\n"; }
#if ($line == 3) { print "<line1>We do not</line1><line2>solicit by phone</line2>\n";}
#if ($line == 3) { print "<line1>Old Cars Needed</line1><line2>For Training</line2>\n";}

#if ($line == 1) { print "<line1>Tree Lot Opens</line1><line2>Sat 11/24</line2>\n"; }
#if ($line == 2) { print "<line1>Tree Lot Opens</line1><line2>Sat 11/24</line2>\n"; }
#print "<line1>Open House</line1><line2>Sun 10/14 11-4</line2>\n";
#if ($line == 1) { print "<line1>No Early</line1><line2>Voting Here</line2>\n";}
#if ($line == 2) { print "<line1>Early Voting</line1><line2>St Catherine's</line2>\n";}
#if ($line == 3) { print "<line1>Early Voting</line1><line2>11811 Claridge Rd</line2>\n";}
#if ($line == 1) { print "<line1>Support our</line1><line2>Fund Drive!</line2>\n";}

#if ($line == 3) { print "<line1>Shrimp/Pit Beef</line1><line2>Feast Su11/11 1PM</line2>\n";}
#if ($line == 2) { print "<line1>Shrimp/Pit Beef</line1><line2>alumni.wvrs.org</line2>\n";}

#if ($line == 1) { print "<line1>Einstein HS</line1><line2>7/4 fireworks</line2>\n";}
#if ($line == 2) { print "<line1>Support WVRS</line1><line2>July 4 Food Sale</line2>\n";}
#if ($line == 3) { print "<line1>Support WVRS</line1><line2>July 4 Food Sale</line2>\n";}
#if ($line == 3) { print "<line1>Library Parking</line1><line2>Large Lot Only</line2>\n"; }
#    if ($line == 1) { print "<line1>Do not block</line1><line2>Rescue Station</line2>\n"; }
#    if ($line == 1) { print "<line1>BullRoast Shrimp</line1><line2>Feast Now!!</line2>\n"; }

#    if ($line == 1) { print "<line1>Recruitment Day</line1><line2>Sun 4/10 11-4</line2>\n"; }
#    if ($line == 1) { print "<line1>Xmas Tree Lot</line1><line2>Open Now!</line2>\n";}
#    if ($line == 1) { print "<line1>Visit Facebook</line1><line2>#GivingTuesday</line2>\n";}
#if ($line == 1) { print "<line1>Tree Sales 330-9</line1><line2>M-F,10-9 weekend</line2>\n"; }
#if ($line == 2) { print "<line1>Tree Sales 330-9</line1><line2>M-F,10-9 weekend</line2>\n"; }
#if ($line == 3) { print "<line1>Tree Sales 330-9</line1><line2>M-F,10-9 weekend</line2>\n"; }
#    if ($line == 3) { print "<line1>LibraryOpenHouse</line1><line2>Sunday Nov 20</line2>\n"; }
#    if ($line == 2) { print "<line1>Library Open</line1><line2>Thursday 11/17</line2>\n"; }
#    if ($line == 1) { print "<line1>Tree Lot</line1><line2>Sold Out</line2>\n";}
#if ($line == 1) { print "<line1>End of Year?</line1><line2>Donate now!</line2>\n"; }
#if ($line == 3) { print "<line1>Happy</line1><line2>Holidays!</line2>\n";}

#{ print "<line1>Open House!</line1><line2>Su 10/8</line2>\n";}
?>
        </message>
</sign>
