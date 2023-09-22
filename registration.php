<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Form registration</title>
</head>
<body>
  <form action="handle-form.php" method="POST">
    <div>
      <label for="first-name">First Name</label>
      <input type="text" name="first-name" id="first-name" require placeholder="Example Jack">
    </div>
    <div>
      <label for="last-name">Last Name</label>
      <input type="text" name="last-name" id="last-name" require placeholder="Example Smith">
    </div>
    <div>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" require placeholder="Example JackSmith@example.com">
    </div>
    <div>
      <label for="male">Male</label>
      <input type="radio" name="gender" id="male" value="male">
      <label for="female">Female</label>
      <input type="radio" name="gender" id="female" value="female">
      <label for="choose-not-to-identify">Choose not to identify</label>
      <input type="radio" name="gender" id="choose-not-to-identify" value="choose-not-to-identify">
    </div>
    <div>
      <label for="hobbies">Hobbies:
        <select name="hobbies" id="hobbies">
          <option value="select an option" selected>select an option</option>
          <option value="gaming">Gaming</option>
          <option value="board games">Board Games</option>
          <option value="coding">Coding</option>
        </select>
      </label>
    </div>
    <div>
      <label for="checkbox">Coding Languages: </label>
      <div>
        <input type="checkbox" name="codingLanguages[]" id="java">
        <label for="java">Java</label>
      </div>
      <div>
        <input type="checkbox" name="codingLanguages[]" id="javascript">
        <label for="javascript">JavaScript</label>
      </div>
      <div>
        <input type="checkbox" name="codingLanguages[]" id="c++">
        <label for="c++">C++</label>
      </div>
      <div>
        <input type="checkbox" name="codingLanguages[]" id="c#">
        <label for="c#">C#</label>
      </div>
      <div>
        <label for="comments">Please leave a comment:</label>
      </div>
      <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
    </div>
    <div>
      <button type="submit">Submit</button>
    </div>

  </form>
  <?php

  ?>
</body>
</html>
