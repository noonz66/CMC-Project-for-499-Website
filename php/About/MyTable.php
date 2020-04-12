<?php
    echo ' 
    <table id="display"> 
<tr> 
    <td> <font face="Arial">الرقم التسلسلي</font> </td> 
    <td> <font face="Arial">من نحن</font> </td> 
    <td> <font face="Arial">الرؤية</font> </td> 
    <td> <font face="Arial">الرسالة</font> </td> 
    <td> <font face="Arial">القيم المؤسسية</font> </td> 
    <td> <font face="Arial">الأهداف الاستراتيجية</font> </td> 
</tr>
';     

    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $field1name = $row["seqNo"];
            $field2name = $row["who_we_are"];
            $field3name = $row["vision"];
            $field4name = $row["mission"];
            $field5name = $row["our_values"]; 
            $field6name = $row["goals"]; 
    
            echo '<tr> 
                    <td>'.$field1name.'</td> 
                    <td><p>'.$field2name.'</p></td> 
                    <td><p>'.$field3name.'</p></td> 
                    <td><p>'.$field4name.'</p></td> 
                    <td><p>'.$field5name.'</p></td> 
                    <td><p>'.$field6name.'</p></td> 
                </tr>';
        }
        $result->free();  
    } 
    echo '<tr><td colspan="6"><button onclick="deleteRow()">Delete</button>     <button onclick="insert()">Insert</button>  <button onclick="edit()">Edit</button></td></tr>'

?>