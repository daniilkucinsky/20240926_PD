<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DaniilsKucinskis</title>
</head>
<body>
    <a href="blog.php">to blog.php</a>
    <h1>Piesakies webinaram!</h1>
    <form name="login">
      <input name="email" type="email" />
      <input name="name" type="name" />
      <button type="submit">Log in</button>
    </form>
    <h2>choose ur level</h2>
    <select name="Ur Level">
  <option value="noob">Beginner</option>
  <option value="good" selected>intermidiate</option>
  <option value="god">Advanced</option>
</select>
<h3>Vai velaties no mums kko sanmemt?</h3>
<div>
      <input type="radio" id="contactChoice2" name="contact" value="Yes" />
      <label for="contactChoice2">Yes</label>

      <input type="radio" id="contactChoice3" name="contact" value="No" />
      <label for="contactChoice3">No</label>
      <button type="submit">Submit</button>
    </div>
    <script src="app.js"></script>
</body>
</html>