<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piesakies webināram!</title>
</head>
<body>
    <div id="form-container">
        <form action="confirmation.php" method="post">
            <label for="name">Ievadiet savu vārdu: </label>
            <input type="text" name="name" id="name" required> <br> <br> 

            <label for="e-mail">Ievadiet savu e-pastu: </label>
            <input type="text" name="e-mail" id="e-mail" required> <br> <br> 

            <select name="difficulty" id="difficulty" required>
                <option value="">--Izvēlaties kursa līmeni--</option>
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Advanced">Advanced</option>
            </select> <br> <br>

            <label for="info">Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</label> <br>

            <label for="yes">Yes:</label>
            <input type="radio" name="info" id="yes">

            <label for="no">No:</label>
            <input type="radio" name="info" id="no">
        </form>
    </div>
</body>
</html>