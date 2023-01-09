
import {ProductType} from "./productType.js";
import { Validator } from "./validation.js";
const form = document.getElementById('product_form');
let inputOptions =[''];
const Valid = new Validator();
form.addEventListener('submit', (e)=>
{
  
    if(!staticValidation()){
    
       e.preventDefault();
       
    }
    else{
      const something= document.getElementsByClassName("form-control");
      const arr = [].slice.call(something);
      arr.forEach(element => {
        if(element.className ==='form-control')
        {
         element.parentElement.remove();
        }
      });
    }
   
  
 }

);
const sku =document.getElementById('sku');

sku.addEventListener('input',()=>{Valid.checkInDB(sku)});


const select = document.querySelector("#productType");
const productType = new ProductType(select.value);

select.addEventListener("change", () => {
  productType.type = select.value;
   const a=run[select.value];
   a();
  productType.showFields();
});

const run ={
  Book:()=>(inputOptions=['weight']),
     Furniture:()=>(inputOptions=['height','width','length']),
      DVD:()=> {inputOptions=['size']},
     'none': ()=>{inputOptions=['']}
  };

  


const staticValidation=()=>
{   
  Valid.checkInDB(sku);
  
const a=  Valid.validateName().validatePrice().validateType().typeValidation(inputOptions);
console.log(a);
return a;

}











