<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   

</head>
<body>
   <div class="wrapper">
       <section class="form signup">
     <header class="head">SECRET CHAT</header>
     <form action="#">
        <div class="error-txt">This is an error message</div>
        <div class="name-details">
            <div class="field input">
                <label>First Name</label>
                <input type="text"placeholder="First Name">
            </div>
            <div class="field input "> 
                <label>Last Name</label>
                <input type="text"placeholder="Last Name">
            </div>
        </div>
        <div class="field input">
            <label>E-mail Address</label>
            <input type="text"placeholder="Enter a email Address">
        </div>
        <div class="field input">
            <label>Password</label>
            <input type="password"placeholder="Enter a Password">
           <i class="fa fa-eye"></i>
        </div>
        <div class="field image">
            <label>Select Image</label>
            <input type="file">
        </div>
       <div class="field button">
           <input type="submit" value="Continue to Chat">
       </div>
     </form>
     <div class="link">Already Signed Up? <a href="#">Login Now</a></div>
       </section>
   </div> 
  
<script src="javascript/signup.js" >
   </script>
</body>
</html>