// basket logic 
/**
 * const basket = document.getElementById('b');
 * basket.innerHTML = 0;
*/



const products = document.getElementById('test');
// showProduct();
console.log(brandFilter('Audi'));

const product = document.getElementById('display');
// product.innerHTML = brandFilter('Audi');

function showProduct(){
    for(let i = 0;i <= passed.length-1;i++){
        console.log(passed[i].brand);
        const product = document.getElementById('display');
        /// product.innerHTML = passed[i].brand;
    }
}

function brandFilter(brands){
    let product = "";
    for (let i=0; i <= passed.length-1; i++){
        if(passed[i].brand==brands){
            product +="<li>"+passed[i].brand+"</li>";
        }
    }
    return product;    
}


