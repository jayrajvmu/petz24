var masterData;
const moduleName  = 'product';
console.log(typeof productData);

console.log(base_url_admin);


$(document).ready(function () {
    refreshDetails();
});


function refreshDetails() {
    getproductDetails();

}

//====[ Get all product data ]===
function getproductDetails() {

    let fields = productData;

    POST({ moduleName ,  fields}).then((data) => {
        masterData = data;
        displayProductDetails(masterData);

    });


}

//===[ Display Product details]===
function displayProductDetails(data) {

    if(data.code == "200"){

        let productData = JSON.parse(data.data)

        console.log(productData);
        
        productData.forEach(product => {

let product_img_array = product.product_img.split(",")
            const productHtml = `
            <div class="col-lg-4 col-sm-6 my-4">
                <div class="grid-product">
                    <div class="grid-items">
                        <div class="tred-pro">
                            <div class="tr-pro-img">
                                <a href="">
                                    <img class="img-fluid"
                                         src="${base_url_admin +  product_img_array[0]}"
                                         alt="${product.name}">
                                </a>
                            </div>
                            <div class="Pro-lable">
                                <span class="p-text">New</span>
                            </div>
                        </div>
                        <div class="caption">
                            <span class="fw-bold">${product.brand_name}</span>
                            <h3><a href="">${product.name}</a></h3>
                            <div class="rating d-flex space-between">
                                <span class="old-price px-2"><del>₹${product.product_price}</del></span>
                                <span class="new-price">${product.product_price}</span>
                            </div>
                        </div>
                        <a href="petz:;" class="btn btn-style1-custom">
                            <i class="fa fa-shopping-bag d-none d-lg-inline"></i> Add to cart
                        </a>
                    </div>
                </div>
            </div>`;

            // Append the product to the list
            $('#product_container').append(productHtml);
        });

    }else{
        $('#product_container').append(`There is not products here`);

    }

    


}



