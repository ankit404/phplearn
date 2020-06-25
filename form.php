<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phpforms</title>
</head>
<body>
    <form action="">
    <table width="600" border="0" cellspacing="1" cellpadding="1">
    <tr>
    <td><h2>Employment Application</h2></td>
    
    </tr>
    
    <tr>
    <td>Name</td>
    <td><input type="text" name="name" maxlength="50"></td>
    </tr>
 
    <tr>
    <td>Website</td>
    <td><input type="text" name="website" maxlength="50"></td>
    </tr>

    <tr>
    <td>Position</td>
    <td>
    <select name="position">

    <option value="Accountant">Accountant</option>
    <option value="Receptionist">Receptionist</option>
    <option value="Administrator">Administrator</option>
    <option value="Supervisor">Supervisor</option>

    </select>
    </td>
    </tr>

    <tr>
    <td>Experience Level</td>
    <td>
    <select name="experience">
    <option value="Entry Level">Entry Level</option>
    <option value="Some Experience">Some Experience</option>
    <option value="Very Experienced">Very Experienced</option>

    </select>   
    </td>
    </tr>

    <tr>
    <td>Employment Status</td>
    <td>
    <input type="radio" name="estatus" value="Employed">Employed
    <input type="radio" name="estatus" value="Unmployed">Unmployed
    <input type="radio" name="estatus" value="Student">Student
    </td>
    </tr>

    <tr>
    <td>Additional Comments</td>
    <td>
    <textarea name="comments" cols="40" rows="6"></textarea>
    </td>
    </tr>

    <tr>
    <td></td>
    <td><input type="submit"> <input type="reset"></td>
    
    </tr>

    </table>
    </form>
</body>
</html>