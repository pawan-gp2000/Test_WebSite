<?php
include_once 'header/header.php';
?>
<!--  banner images    -->
<div id="banner" style="float: left;">
	<img src="images/website_design.jpg" height="205" width="900">
</div>
<!-- div banner close -->

<!-- Content in the web site is here -->
 <span class="PageContentSeperator"></span> <br>
      Please fill out the details below, or e-mail us at <a href="#">sales@daasys.com</a> and leave the rest to us. Fields marked with an Asterisk (*) are mandatory.<br>
      <br>
      For job inquiries visit our <a href="careers.html">Careers</a> section.<br>
      <br>
      <form name="frmcontact"  method="post" id="frmcontact" style="margin:0px;">
        <div class="FormFieldSet">
          <fieldset class="FormField">
            <ul style="text-decoration: none;">
              <li>
                <label  for="txtEmail">E-mail Address&nbsp;&nbsp; &nbsp;&nbsp;</label>
                <input type="text" style="width:200px; height:18px;" name="txtEmail" id="txtEmail">
              </li>
              <li>
                <label for="txtName">Name&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                <input type="text" style="width:200px; height:18px;" name="txtName" id="txtName">
              </li>
              <li>
                <label for="txtContact">Phone&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </label>
                <input type="text" style="width:200px; height:18px;" name="txtContact" id="txtContact">
              </li>
              <li>
                <label for="txtCompanyName">Company Name&nbsp;&nbsp;&nbsp; </label>
                <input type="text" style="width:200px; height:18px;" name="txtCompanyName" id="txtCompanyName">
              </li>
              <li>
                <label for="txtComments">Comments&nbsp;&nbsp; </label></br>
                <textarea style="width:280px; height:60px;" name="txtComments" id="txtComments"></textarea>
              </li>
              <li style="margin-top:12px; ">
                <label for="Blank">&nbsp;&nbsp;</label>
                <input type="submit" style="width:80px; height:25px;" class="FormButton" value="Submit" id="btnSubmit" name="btnSubmit">
              </li>
            </ul>
          </fieldset>
        </div>
      </form>
      <br>
      <br>
      <!-- InstanceEndEditable -->  

<!--  content close  -->

<?php 
include_once 'footer/footer.php';
?>
</div>
<!-- master div close -->
</body>
</html>

