export class ProductType {
  constructor(type) {
    this.type = type;
    this.fields = {
      Book:document.querySelector(".Book"),
      Furniture:document.querySelector(".Furniture"),
      DVD:document.querySelector(".DVD")
    };
    this.showFields(type);
  }

  showFields()
  {
    if (this.type)
    {
      for (const [key, value] of Object.entries(this.fields))
      {
        value.classList.toggle("selected", key === this.type);
        value.style.display = (key === this.type) ? "block" : "none";
      }
    } 
  }}
  

