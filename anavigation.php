<?php

echo '<style>
div {
    color: blue;
    font-family: "Times New Roman", Times, serif;
    font-style: italic;
    font-size: 20px;

  }
  button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #4CAF50;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
<ul>
 <li><a href="view_all_users.php">Home</a></li>
  <li><a href="salebook.php">Borow</a></li>
  <li><a href="returnn.php">Return</a></li>
  <li><a href="addbook.php">Add book</a></li>
  <li> <a href="authors.php">Add author </a> </li>
  <li> <a href="logout.php">Logout </a> </li>
  </ul>';
?>