# CMSPrimitiveModel
<h2>Setup procedures</h2>
<ol>
  <li>First, download the whole project and put the project into your localhost or any server with php installed</li>
  <li>Second, create a table in your database called customer, with column "account" and "password" and create a user account with password. This table would be used for user login</li>
  
  <li>Third, go to CMS/php/settings.php. Enter server name, user account, password and database name(the database that would be manipulated by the CMS. It can be any database).</li> 
  
  <li>Then, go to browser and enter "localhost:" + port number + "/CMS/login.html" (e.g. localhost:8080/CMS/login.html) or the server domain/I.P. + "/CMS/login.html" (e.g. <a>ABCCompany.com/CMS/login.html</a> or <a>119.81.130.181/CMS/login.html</a>) into the address bar (depends on whether you put it into a localhost or a server) and sign-in with the account you have created in step two. (the detail implementation for sign-in can be found in CMS/php/login.php) </li>
  
  <li>After successful login, you would be redircted to CMS/CMS.html. Then, please kindly enjoy to play with the primitive model.</li>
</ol>

<h2>Remarks: </h2>
<p>The CMS can display any data from the database in a sorttable manner. Since there is not enough time, security controls are not supported and considered. Such as SQL injection issue and user authentication.
</p>
<p>
It supports basic usage of insert, update, delete and display. Insert and update operations don't allow any null data. So, please be reminded that CMS can't insert or update any row that contain null value. 
</p>
<p>  
Also be reminded that tables with no primary key do not support insert, update and delete of any data under the scheme of MySQL. So, please make sure your tables in the database contain a primary key.
</p>
