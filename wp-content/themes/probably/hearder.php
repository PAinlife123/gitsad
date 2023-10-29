<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?= bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= bloginfo('discription');?>">
    <meta name="author" content="">
     <title><?= bloginfo('name');?>|<?= is_front_page()? bloginfo('discription') : wp_title();?></title>
   
</head>
<body>
   <nav class="navbar">
        <div class="navbar-sad">
                <div class="navbar-trid">
                      <h1>Essense</h1>
                </div>
             <div class="Search">
                   <input type="text" class="text" id="" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
                 <button  class="submit"><i class="fa fa-search" ></i></button>
             </div>
          </div>

     </nav>
<main>