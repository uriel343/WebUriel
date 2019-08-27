<?php 
echo"<!DOCTYPE html>
<html lang=\"en\">
<head>
    <link rel=\"stylesheet\" href=\"./css/style.css\">
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Traveling</title>
    
</head>
<body >
    <header>
        
        <ul class=\"nav\"> 
           <li><a href=\"./index.html\">Home</a></li> 
           <li><a href=\"./ProgrammerPage.html\">About Programmer</a></li>   
        </ul>
       <h1>Traveling </h1> 
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
           Omnis quod quisquam, porro numquam delectus quidem at eligendi, <br>
           culpa soluta possimus maiores sunt cumque, nesciunt incidunt nulla <br>
           sint consectetur atque distinctio.</p>
        </header> ";
       
       echo "<section class=\"formulario\">

        <section class=\"cantact_info\">
            <section class=\"info_title\">
                <h2>DATOS<br>DE USUARIO</h2>
            </section>

        </section>
         <div class=\"main-container\">
        <table>
            <thead>
                <tr>
                    <th>Nombres</th><th>Telefono</th><th>Email</th>
                </tr>
            </thead>";
        $names = $_POST["names"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
           echo "<tr>
                <td>$names</td><td>$phone</td><td>$email</td>
            </tr>
        </table>
    
    </div>
        </section>
        <footer>
              

        </footer>";


    echo"</body>
    </html>";
?>