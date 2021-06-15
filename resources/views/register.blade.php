<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "{{asset('css/mywork.css')}}"/>
    </head>
        <body>
            <form action = "" target="_blank" method="post" autocomplet="on">
                <label title = "surname firstname middlename" for="fname">Fullname</label><br>
                <input type="text" name="fullname" id="fname" placeholder=" Adepeke Ronke" required><br>
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" placeholder="user@gmail.com" required><br>
                <label for="phoneNo">Phone Number</label><br>
                <input type="tel"  id="phoneNo" name="number" placeholder="+234-81-4361-1894" required><br>
                <label for = "gender">Gender</label><br>
                <select id = "gender" name = "gender" required>
                <option value = "male">Male</option>
                <option value = "female" selected>Female</option>
                <option value = "others">Others</option>
                </select><br>
                <label for="DOB">Date of Birth</label><br>
                <input type="date" id="DOB" name="birthday" required><br>
                <label for="username">Username</label><br>
                <input type="text" id="username" name="username" placeholder="Ronke" reuqired><br>
                <label for="pwd">Password</label><br>
                <input type="password" id="pwd" name="password" placeholder="R1234#" required><br>
                <label for="myfile">Upload a file</label><br>
                <input type="file" id="myfile" name="document"><br><br>
                <input type = "Submit" Value = "Submit">
            </form>
        </body>
</html>