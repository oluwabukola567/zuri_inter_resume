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
        font-size: 0.90em;
        margin: 20px 20px 20px 20px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    input{
        box-sizing: border-box;
        margin: 10px 20px 20px 10px;
    }
    textarea{
        box-sizing: border-box;
        margin: 20px 20px 20px 20px;
   
    }
</style>
<body>
    <header><h2>OGUNLOWO OLUWABUKOLA ELIZABETH</h2></header>
    <form method="post" action="" >
        <label class="">Fullname</label>
        
        <input type="text" class="" name="fname"><br/>
        
        <label>Personal Information</label><br/>
<ul>
            <li><label>Email</label>
                <input type="email" class="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="">We'll never share your email with anyone else.</small>
            <li><label>Phone Number</label>
            <input type="number"class="" required></li><br/>
            <li><label>Github </label>
            <input type="text"class="" required></li><br/>
            <li><label>LinkedIn</label>
            <input type="text"class="" required></li><br/>
        </ul>
<label>Work experience</label>
<input type="text" class=""></textarea><br/>
<label>Education</label>
<select class="">
    <option value="Bsc">BSc</option>
    <option value="Hnd">Hnd</option>
    <option value="ND">ND</option>
    <option value="Msc">MSc</option>
    
</select><br/>
<label>Skills</label>
<input type="text" class="" rows="6"></textarea><br/>
<label>Membership</label>
<input type="text" class=""><br/>
<label>Awards</label>
<input type="text"class=""><br/>
<button type="submit" name="submit">Submit</button>
</div>
    </form>

<?php
if(isset($_POST["submit"])){
    echo"Submitted";
}

  ?>

    
</body>
</html>