<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<style>
    ul{
        list-style-type: none;
    }
    label{
        
        margin: 10px 20px 20px 10px;
        }
    input{
        box-sizing: border-box;
        margin: 10px 20px 20px 10px;
    }
    textarea{
        box-sizing: border-box;
        margin: 20px 20px 20px 20px;
   
    }
    .textt{
        font-size: 20px;
    }
    h3{
        margin: 10px 20px 20px 10px;  
    }
   </style>
<body>
    <img src="IMG-20210820-WA0021.jpg">
    <header><h2><label>Personal Information</label></h2></header><br/>
    <h3>Ogunlowo Oluwabukola Elizabeth</h3><br/>
    <h3>Backend Developer</h3><br/>
    <p class="textt"> I am an enthusiastic backend developer seeking for internship to improve my skills</p><br/>
<ul>
<li class="details">
<label>Email:</label>
                <p>oeogunlowo@student.oauife.ng</p><br/>
</li>
<li>
<label>Phone Number:</label>
                <p>08144036165</p><br/>
</li>
<li>
<label>Github:</label>
                <p>https://github.com/oluwabukola567</p><br/>
</li>
<li>
<label>LinkedIn:</label>
<p>www.linkedin.com/in/oluwabukola-elizabeth-11a885182</p><br/>
</li>
<h3>SKILLS</h3>
<ul class="skills">
    <li>HTML</li>
    <li>CSS</li>
    <li>Javascript</li>
    <li>Nodejs</li>
    <li>PHP</li>
    <li>MongoDB</li>
    <li>Microsoft Access</li>
    <li>MySql</li>
    <li>jQuery</li>
    

</ul>
<h3> EXPERIENCE</h3>
<ul>
    <li>Intern at Trace media ltd</li>
</ul>
<h3>EDUCATION</h3>
<ul>
    <li>National Diploma in computer Science<br/>
    Federal school of Statistics
</li>
<li>Bsc in computer Science with mathematics<br/>
    Obafemi Awolowo University
</li>
</ul>

    <form method="post" action="" >    
        <fieldset>  
            <legend>Contact form</legend>
<ul>
            <li><label>Email:</label>
            <input type="email"class="" required></li><br/> 
            <li><label>Phone Number</label>
            <input type="number"class="" required></li><br/>
            <li><label>Subject </label>
            <input type="text" class="" required></textarea></li><br/>
            <li><label>Messages</label>
            <input type="textarea"class="" required></li><br/>
        </ul>
<button type="submit" name="submit">Submit</button>
</fieldset>
</div>
    </form>

<?php
if(isset($_POST["submit"])){
    echo"Submitted";
}

  ?>

    
</body>
</html>