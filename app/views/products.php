

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?=ROOT?>/assets/css/style.css" rel="stylesheet">

</head>
<body>



<div class="container">
    
   <div class="header"><h1>Product List</h1>
   <div class="buttons"><button onclick="window.location.href='add'";>ADD</button>
   <button id="delete-product-btn" form="product-list">MASS DELETE</button>
   </div>
   
    </div>
        
    <form  class="product-home" method="post" id="product-list">
       <?php if($data)
       {?>
         <div class="grid-container">
       
        <?php
          foreach ($data as $key)
            { ?>

                    <div class="products">
                    <input type="checkbox" class="delete-checkbox" name ="delete[]"value = <?= $key->sku ;?>>
                    <?=$key->sku;?> <br>

                    <?= $key->name ;?> <br>
                    <?=$key->price;?><br>
                    <?=$key->attributes;?> <br>
                   </div>
                  
           
               
           <?php }?> </div> <?php } else{?> 
                 <div class="empty">
                    <h4>Please Add Products</h4>
                 </div>
             <?php }?>

           
    
 </form>
    <footer >
    <h2>Scandiweb Test Assignment</h2>
 </footer>
  
</div>



</body>

</html>