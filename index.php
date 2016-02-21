<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Welcome to our SDS </h1>
        <form action="dialogManagerImpl.php" method="post">
            Utterance : <input type="text" name="uttrance" size="200" ><br>
            
            <h1>Concepts</h1> <br>
            
            Actor Name: <input type="text" name="actorname" size="200" ><br>
            
            Character Name : <input type="text" name="charactername" size="200"><br>
            
            Movie Name: <input type="text" name="moviename" size="200" ><br>
            
            Director Name: <input type="text" name="directorname" size="200" ><br>
            
            Producer Name: <input type="text" name="producername" size="200" ><br>
            
            
            <h1>Confidence</h1> <br>
            
            ASR confidence: <input type="text" name="asrconf" size="200" ><br>
            
            Utterance Confidence: <input type="text" name="uttconf" size="200" ><br>
            
            Concept Confidence: <input type="text" name="conceptconf" size="200" ><br>
                <input type="submit">
            </form>
              
        
    </body>
</html>
