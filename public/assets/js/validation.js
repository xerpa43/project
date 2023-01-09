export class Validator
 {
 result;
    
validateName=()=>{const name = document.getElementById('name');


if(name.value == ''){
  this.setError(name,"Please enter a name")
  return this;
}
 

else{
  this.setSuccess(name);
  return this;
  
}
}

validatePrice=()=>{
  const price = document.getElementById('price');

if(price.value=='' || this.checkNegative(price.value)){
  this.setError(price ,"Please enter a valid Price");
  return this;
  
}
else{
  this.setSuccess(price)
  return this;
  
}}


validateType=()=>{
  const option = document.getElementById('productType');

if(option.value === 'none'){
  this.setError(option,"Please select an Option");
  return this;
}else{
    this.setSuccess(option);
    return this;
}
}


typeValidation=(inputOptions)=>
{
  
  //general
  const [v1='',v2=null,v3=null] =inputOptions;
  if(v1){
    const input1 = document.getElementById(v1);
    const valueInput1 = input1.value;
   if(valueInput1 =='' ||  this.checkNegative(valueInput1) ){
    this.setError(input1,"please enter a "+v1);
   }
   else{
     this.setSuccess(input1);
      
   }
  }
 

if(v2 && v3 ){//furniture
   const input2 = document.getElementById(v2);
   const input3 = document.getElementById(v3);
    if(input2.value == '' ||  this.checkNegative(input2.value))
   {
      this.setError(input2, "Please enter a valid width");
   }
   else{
     this.setSuccess(input2);
   }

   if(input3.value == '' || this.checkNegative(input3.value)){
     this.setError(input3, "Please enter a valid Length");
   }
   else{
     this.setSuccess(input3);
   }
}


var a =this.final()
 return a;


}


 setError = (input, error) => {
    const Control = input.parentElement;
    const small = Control.querySelector('small');
  
    small.innerText = error;
  
    Control.className = "form-control error";
  }
  
    setSuccess = (input) => {
    const Control = input.parentElement;
    const small = Control.querySelector('small');
    Control.className = "form-control success";
  }
  
 final(){
  let something= document.getElementsByClassName("form-control");
  var arr = [].slice.call(something);
 
    return this.result = arr.every((a)=>a.className !=="form-control error")
   
    

  }

  checkInDB = async (sku) => {
    const value = sku.value;
  
    if (!value) {
      this.setError(sku, "Please enter a SKU");
      return;
    }
  
    try {
      const response = await fetch(`https://angngimalama.000webhostapp.com/api/${value}`);
      const data = await response.json();
  
      if (data) {
        this.setError(sku, "Please enter different SKU");
        return;
      }
    } catch (error) {
      console.error(error);
    }
  
    this.setSuccess(sku);
  }
  
  checkNegative(number){
       return (number<=0?true:false)
  }


}




