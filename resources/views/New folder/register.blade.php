<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>
    <form action="/welcome" method="get">
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
        <label for="first-name">First name:</label>
        <br><br>
        <input type="text" id="first-name" name="first">
        <br><br>
        <label for="last-name">Last name:</label>
        <br><br>
        <input type="text" id="last-name" name="last">
        <br><br>
        <p>Gender:</p>
        <input type="radio" name="gender" id="male" value="male">Male<br>
        <input type="radio" name="gender" id="female" value="female">Female<br>
        <input type="radio" name="gender" id="other" value="other">Other<br>
        <p>Nationality:</p>
        <select name="nationality" id="nationality">
            <option>Indonesian</option>
            <option>Singapuran</option>
            <option>Malaysian</option>
            <option>Australian</option>
        </select>

        <p>Language Spoken:</p>
        <input type="checkbox">Bahasa Indonesia<br>
        <input type="checkbox">English<br>
        <input type="checkbox">Other<br>

        <p>Bio:</p>
        <textarea cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>