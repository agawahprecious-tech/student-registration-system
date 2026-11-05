ini_set('display_errors', 1);
error_reporting(E_ALL);
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <header>
        STUDENT REGISTRATION
    </header>

    <form action="process.php" method="POST">

        <p>Complete all required fields marked *</p>

        <label>Full name *</label>
        <input type="text" name="full_name"
        placeholder="e.g. Ada Nfor" required>

        <label>Email address *</label>
        <input type="email" name="email"
        placeholder="student@example.com" required>

        <label>Phone number *</label>
        <input type="tel" name="phone"
        placeholder="e.g. 6XXXXXXXX" required>

        <label>Matriculation number *</label>
        <input type="text" name="matric_no"
        placeholder="e.g. SE2026001" required>

        <label>Date of birth *</label>
        <input type="date" name="dob" required>

        <label>Department *</label>
        <select name="department" required>
            <option value="">Select department</option>
            <option value="Software Engineering">Software Engineering</option>
            <option value="Computer Engineering">Computer Engineering</option>
            <option value="Data Science">Data Science</option>
        </select>

        <label>Level *</label>
        <select name="level" required>
            <option value="">Select level</option>
            <option value="HND 1">HND 1</option>
            <option value="HND 2">HND 2</option>
            <option value="Bachelor 1">Bachelor 1</option>
            <option value="Bachelor 2">Bachelor 2</option>
        </select>

        <label>Gender *</label>

        <div class="gender">
            <input type="radio" name="gender" value="Female" required> Female

            <input type="radio" name="gender" value="Male"> Male

            <input type="radio" name="gender" value="Prefer not to say">
            Prefer not to say
        </div>

        <label>Password *</label>
        <input type="password" name="password" required>

        <label>Confirm password *</label>
        <input type="password" name="confirm_password" required>

        <div class="checkbox">
            <input type="checkbox" name="accuracy" value="1" required>
            I confirm that the information provided is accurate. *
        </div>

        <button type="submit">SUBMIT REGISTRATION</button>

    </form>

</div>

</body>
</html>
```
