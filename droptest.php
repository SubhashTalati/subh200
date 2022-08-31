<select>
<?php 
     $records = mysql_query("SELECT CourseTitle FROM tblcourse ");
     while ($row = mysql_fetch_array($records)){
     echo "<option value=\"\">" . $row['CourseTitle'] . "</option>";
    }
?>
</select>