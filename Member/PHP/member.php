
<!DOCTYPE html>

<html dir="rtl">

<head>
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="member.css">
<link href="https://fonts.googleapis.com/css2?family=Markazi+Text&display=swap" rel="stylesheet">
<script language='javascript'>

</head>
<body class="bg">


  
  
    <form action="m.php" method="POST">
  

    <table class="p" >

        <th >
            <h2 >بيانات الاعضاء</h2>
        </th>
      
        <tr>
           <td > الاسم الاول</td>
            <td> <input  class="chickbox" type="text" name="FName" ></td>
             
        </tr>
        <tr>
             <td>  الاسم الثاني</td>
            <td> <input class="chickbox" type="text" name="LName" ></td>
           
        </tr>
        <tr>

            <td>  المنصب  </td>
            <td> <input class="chickbox" type="text" name="Position" ></td>
            
        </tr>

        <tr>
            <td> رقم الجوال</td>
            <td><input class="chickbox" type="number" name="phone_no" ></td>
            
        </tr>
        <tr>
            <td> بريد الاكتروني</td>
            <td><input class="chickbox" type="email" name="Email" onkeyup='isValidEM(this.value)'> <span id='EML'> </span></td>
            
        </tr>
        <tr>
             <td> الصورة</td>
            <td><input class="chickbox" type="file" name="Image"></td>
           

        </tr>
    
        <tr>
            <td><input class="btn"  type="submit" value="حفظ البيانات"  ></td>
        </tr>
        

    </table>





 

</form>
 
</body>
</html>