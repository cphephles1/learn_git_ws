<?php
include("includes/header.inc.php");
include("includes/nav.inc.php");
?>
<!--
this is dynamic design (PHP replacement for HTML) - by Craig Phephles for 360Web @ MCC
instructors: G, Art, Jayson, & Skip
date: 1.18.17
-->
<br/>
    <main>
        <form action="http://www.randyconnolly.com/tests/process.php" method="post" id="checkForm">
            <fieldset>
               First Name: <input type="text" name="fname" placeholder="first name" id="fname"/>
            </fieldset>
            <fieldset>
             Last Name: <input type="text" name="Lname" placeholder="last name" id="Lname"/>
            </fieldset>
            <fieldset>
             Email:  <input type="email" name="email" placeholder="name@domain.com" id="email"/>
            </fieldset>
            <fieldset>
            Phone:   <input type="tel" name="phone" placeholder="123-456-7890" id="phone"/>
            </fieldset>
            <fieldset>
             Comments:  <textarea rows="3" name="comment" placeholder="your comments here" id="comment"/></textarea>
            </fieldset>
            <button onclick="myFunction()"> <type="submit"></input>Submit</button>
<!--
        <button type="submit" onsubmit="myFunction();">Submit</button>

         <input type="submit" name="submit" value="Submit Form">   
         -->
 
        </form><br>
    </main>
  <div style="clear:both;"></div>

<?php
include("includes/footer.inc.php");
?>