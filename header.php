<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory Dashboard</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
    }
    .navbar {
      background-color: rgb(187, 152, 194);
      padding: 15px;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .navbar input[type="text"] {
      padding: 7px;
      border: none;
      border-radius: 3px;
    }
    .sidebar {
      margin: 0;
      height: 100vh;
      width: 200px;
      background-color: rgb(220, 180, 228);
      position: fixed;
      top: 0;
      left: 0;
      padding-top: 30px;
    }
    .sidebar a {
      display: block;
      padding: 15px;
      text-align: center;
      padding-bottom: 30px;
      color: black;
      text-decoration: none;
    }
    .sidebar h2 {
      display: block;
      text-align: center;
      padding-bottom: 30px;
      color: black;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: rgb(187, 152, 194);
    }
    .content {
      margin-left: 260px;
      padding: 20px;
    }
    .table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
    }
    .table th, .table td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: left;
    }
    .table th {
      background-color: rgb(154, 114, 178);
      text-align: center;
    }
    .table td {
      background-color: rgb(204, 210, 214);
      text-align: center;
    }
    .action-btn {
      padding: 5px 10px;
      margin-right: 5px;
      border: none;
      cursor: pointer;
      color: black;
    }
    .action-btn .edit {
      background-color: blue;
    }
    .action-btn .delete {
      background-color: blue;
    }
  </style>
</head>