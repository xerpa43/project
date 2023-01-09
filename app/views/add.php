
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
    <div class="header"><h1>Product Add</h1>
    <div class="buttons"><button form="product_form" type="submit" id="button"  >Save</button>
    <button onclick="window.location.href='index.php'";>Cancel</button>
    </div>
    </div>
    
   
    

  <form method="post" id="product_form" autocomplete="off">
    
     
  <?php if(isset($this->result)){?>
    
    <div class="server-error">
        <h4>The Data couldn't be validated by server</h4>
       </div>
    <?php };?>
    <br>
    <div class="form-control">
    <label for="SKU">SKU</label>
    <input type="text" name="sku" id="sku">
      <small>error</small></div>
    
  
       
   <div class="form-control">
   <label for="name">Name</label>
   <input type="text" name="name" id="name"><small>error</small>
   </div>

   <div class="form-control">
   <label for="price" >Price($)</label>
   <input name="price" id="price" type="number" step="0.01"><small>error</small>
   </div>
   
 <div class="form-control">
 <label for="ProductType">Type Switcher</label>
   <select id="productType" name="option"> 
   <option  value="none"  selected>Select an option</option> 
  <option id="DVD">DVD</option> 
  <option id="Furniture">Furniture</option>
  <option id="Book">Book</option>
  
</select><small>error</small>
 </div>

  <br><br>
  
    
      
      
<div class="Book" id="hide-me">
  
  <div class="form-control">
    <label for="weight">Weight (KG)</label>
    <input type="number" name="weight" id="weight">
    <small></small>
    <p>Please, provide weight</p>
  </div>
</div>


<div class="Furniture"  id="hide-me">
  <div class="form-control">
    <label for="width">Width (CM)</label>
    <input type="number" name="width" id="width">
    <small>error</small>
  </div>
  <div class="form-control">
    <label for="length">Length (CM)</label>
    <input type="number" name="length" id="length">
    <small>error</small>
  </div>
  <div class="form-control">
    <label for="height">Height (CM)</label>
    <input type="number" name="height" id="height">
    <small>error</small>
  </div>

  <p>Please provide Dimensions</p>
</div>


<div id="hide-me" class="DVD" >
  <div class="form-control">
    <label for="size">Size (MB)</label>
    <input type="number" name="size" id="size" min="1" value="">
    <small>error</small>
    <p>Please, provide size</p>
  </div>
</div>


    

  

  

  </form>
</div>

<script src="<?=ROOT?>/assets/js/index.js" type="module"></script>
 
</body>
</html>