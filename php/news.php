
<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="../css/newsStyle.css">
    <link href="../css/homestyle.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/04dee08355.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body class="loggedin">
<form action="newsDB.php" method="POST">
    <nav class="navtop">
        <div>
            <a href="../php/home.php">
                <img class="whiteback" src="../assets/logo.svg" alt="Capital Municipal Council" width="50px" height="50px">
                <h1>Capital Municipal Council of Bahrain</h1>
            </a>
            <a href="../php/home.php"><i class="fas fa-sign-out-alt"></i>خروج</a>
        </div>
    </nav>
    <div class="content">
        <h2>أخبار</h2>
    </div>
  
   
            <div class="shortcuts">
            
<div id="form-main">
  <div id="form-div">
    <form class="form" id="form1">
      
      <p class="title">
      
        <input name="title" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="العنوان " id="title" />
      </p>
      <p class="date">
      
        <input name="date" type="date"  class="validate[required,custom[onlydate]] feedback-input" placeholder="التاريخ"  id="date" />
      </p>
    

<p class="text">
        <textarea name="body" class="validate[required,length[6,500]] feedback-input" id="body" placeholder="المقال"></textarea>
      </p>

    
      <p class="chickbox">
       <td> الصورة</td>
        <input name="image" type="file"  id="chickbox" /> 
      </p>
       
      
      
      <div class="submit">
        <input type="submit" value="حفظ البيانات" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>




            </div>
        </div>
    </div>
    <div class="footer">
        <p>&copy Capital Municipal Council of Bahrain</p>
    </div>
</form>
</body>

</html>