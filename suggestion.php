<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  padding: 0;
  margin: 0;
  background-color: white;
}
.Suggestionbox {
  top: 60%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  width: 500px;
}
.Suggestionbox h2 {
  font-size: 20px;
  margin-bottom: 15px;
}
.Suggestionbox input {
  width: 100%;
  height: 50px;
  padding: 0 20px;
  margin-bottom: 15px;
  border: radius 5px;
  border: 1px solid #b686b4;
}
.Suggestionbox input:focus {
  border: 1px solid #000;
  outline: 0;
}
.Suggestionbox textarea {
  width: 100%;
  height: 200px;
  padding: 15px 20px;
  margin-bottom: 100px;
  border-radius: 5px;
  border: 1px solid #86b0b6;
}
.Suggestionbox textarea:focus {
  border: 1px solid #000;
  outline: 0;
}
.Suggestionbox button {
  border: 0;
  padding: 10px 30px;
  background: #86b0b6;
  font-size: 18px;
  border-radius: 5px;
  color: #fff;
}
.Suggestionbox button:hover {
  background-color: #718a;
}
        </style>
  </head>
<body>

<div class="Suggestionbox">
      <h2>Suggest Here:</h2>
      <form action="#">
        <input type="text" name="full_name" placeholder="Full Name..." />
        <input type="email" name="email" placeholder="Email Adrress..." />
        <textarea name="suggest" placeholder="suggest...."
        ></textarea>
        <center><a href="suggestion.php">
            <button class="btn btn-primary btn-lg">submit</button></center>  
            </form>
</body>
</html>
