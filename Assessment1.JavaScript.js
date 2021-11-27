
window.onload = function(){
    //Cartbox
    const IconShopping = document.querySelector('.IconShopping');
    const CartCloseButton = document.querySelector('.fa-close');
    const CartBox = document.querySelector('.CartBox');
    IconShopping.addEventListener("click",function(){alert('All items have been added to cart')});
    IconShopping.addEventListener("click",function(){CartBox.classList.add('active');});
    CartCloseButton.addEventListener("click",function(){CartBox.classList.remove('active');});


   

    //LocalStorage//
    
    const AddToCartButton = document.getElementsByClassName('AddToCart');
    let items = [];
   for(let i=0; i<AddToCartButton.length; i++){
        AddToCartButton[i].addEventListener("click",function(e){
            
          if(typeof(Storage) !== 'undefined'){
            let item = {
                id:i+1,
                name:e.target.parentElement.children[0].textContent,
                price:e.target.parentElement.children[2].children[0].textContent,
                no:1
            
            };
            if(JSON.parse(localStorage.getItem('items'))== null){
                items.push(item);
               localStorage.setItem("items",JSON.stringify(items));
               window.location.reload();
            }
            else{
                const localItems = JSON.parse(localStorage.getItem("items"));
                localItems.map(data=>{
                if(item.id == data.id){
                   item.no = data.no + 1;
                    console.log(item);
                }else{
                    items.push(data);
                }

             });

                items.push(item);
                localStorage.setItem('items',JSON.stringify(items));
                window.location.reload();
                alert('Item has been added to cart');
            }
            }
            else{
                alert('storage is not working on your browser');
            }
          });
        }
//adding data to shopping cart
const IconShoppingP = document.querySelector('.IconShopping p');
let no = 0;
JSON.parse(localStorage.getItem('items')).map(data=>{
   no = no + data.no; 
});
IconShoppingP.innerHTML = no;     

//addding cartbox data in table
const CartBoxTable = CartBox.querySelector('table');
let tableData = '';
tableData += '<tr><th>S/No</th><th>Item Name</th><th>Item No</th><th>Item Price</th><th></th></tr>';
if(JSON.parse(localStorage.getItem('items'))[0] === null){
    tableData += '<tr><td colspan="5">No items found</td></tr>'
}else{
    JSON.parse(localStorage.getItem('items')).map(data=>{
          tableData += '<tr><th>'+data.id+'</th><th>'+data.name+'</th><th>'+data.no+'</th><th>'+data.price+'</th><th><a href ="#" onclick=Delete(this);>Delete</a></th></tr>'
    });
    
}

CartBoxTable.innerHTML = tableData;

}//Fully Web Tutorials YouTube, Accessed on 23rd November,2021. 
    
  
