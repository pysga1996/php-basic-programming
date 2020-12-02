<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Account Sign Up</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <div id="content">
    <h1>Account Sign Up</h1>
    <form action="display_results.php" method="post">

    <fieldset>
    <legend>Account Information</legend>
        <label>E-Mail:
            <input type="text" name="email" value="" class="email"/>
        </label>
        <br />

        <label>Password:
            <input type="password" name="password" value="" class="password"/>
        </label>
        <br />

        <label>Phone Number:
            <input type="text" name="phone" value="" class="phone"/>
        </label>
    </fieldset>

    <fieldset>
    <legend>Settings</legend>

        <p>How did you hear about us?</p>
        <label>
            <input type="radio" name="heard_from" value="Search Engine" />
        </label>
        Search engine<br />
        <label>
            <input type="radio" name="heard_from" value="Friend" />
        </label>
        Word of mouth<br />
        <label>
            <input type=radio name="heard_from" value="Other" />
        </label>
        Other<br />

        <p>Would you like to receive announcements about new products
           and special offers?</p>
        <label>
            <input type="checkbox" name="wants_updates"/>
        </label>YES, I'd like to receive
        information about new products and special offers.<br />

        <p>Contact via:</p>
        <label>
            <select name="contact_via">
                    <option value="email">Email</option>
                    <option value="text">Text Message</option>
                    <option value="phone">Phone</option>
            </select>
        </label>

        <p>Comments:</p>
        <label>
            <textarea name="comments" rows="4" cols="50"></textarea>
        </label>
    </fieldset>

    <input type="submit" value="Submit" />

    </form>
    <br />
    </div>
</body>
</html>