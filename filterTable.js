// var products = [
//   {id:1,productName:"Awesome Mug",price:99,storage:4,material:"Steel",color:"White",manufacturer:"Awesome things AS",tag:"sturdy"},
//   {id:2,productName:"Cool mug",price:199,storage:12,material:"Steel",color:"Red",manufacturer:"Awesome things AS",tag:"sturdy"},
//   {id:3,productName:"Sweet mug",price:149,storage:21,material:"Ceramic",color:"White",manufacturer:"CrazyThings",tag:"handmade"},
//   {id:4,productName:"Crazy mug",price:299,storage:4,material:"Oak",color:"Red",manufacturer:"SweetDealz",tag:"handmade"},
//   {id:5,productName:"Super tankard",price:349,storage:19,material:"Ceramic",color:"Black",manufacturer:"CrazyThings",tag:"handmade"},
//   {id:6,productName:"Beer glass",price:399,storage:34,material:"Oak",color:"Green",manufacturer:"SweetDealz",tag:"sturdy"},
//   {id:7,productName:"Whisky glass",price:449,storage:7,material:"Steel",color:"Black",manufacturer:"Awesome things AS",tag:"limited"},
//   {id:8,productName:"Sturdy cup",price:499,storage:45,material:"Ceramic",color:"Green",manufacturer:"MineCrafters",tag:"limited"},
//   {id:9,productName:"Coffee cup",price:449,storage:56,material:"Steel",color:"Blue",manufacturer:"MineCrafters",tag:"sturdy"},
//   {id:10,productName:"Milk glass",price:599,storage:56,material:"Oak",color:"Blue",manufacturer:"Awesome things AS",tag:"vip"},
//   {id:10,productName:"Abderrahim",price:599,storage:56,material:"Oak",color:"Blue",manufacturer:"ABBAS",tag:"vip"}
// ];

// var productsNew = products;

// var selectedManufacturers = [];
// var selectedColors = [];
// var selectedMaterial = [];

// function ready(fn) {
//     if (document.attachEvent ? document.readyState === "complete" : document.readyState !== "loading") {
//         fn();
//     } else {
//         document.addEventListener('DOMContentLoaded', fn);
//     }
// }

// function reset() {
//   renderManufacturersTable();
//   renderColorTable();
//    renderMaterialTable();
// }
//     // Iterate and set unique  
// function renderManufacturersTable() {
//     var manufacturers = products
//         .map(p => p.manufacturer)
//         .filter((value, index, self) => {
//             return self.indexOf(value) === index;
//         });

//     // Render manufacturer table.
//     var manufacturerTable = document.getElementById('filterTableOne');
//     var manufacturerRows = manufacturers.map(m => {
//         var row = document.createElement("tr");
//         var nameCol = document.createElement("td");
//         var selCol = document.createElement("td");
//         var selButton = document.createElement("input");
//         selButton.setAttribute("type", "checkbox");
//         selButton.setAttribute('data-criteria', m);
//         selButton.addEventListener('change', function(event) {
//             if (this.checked) {
//                 selectedManufacturers.push(event.target.dataset.criteria);
//             } else {
//                 selectedManufacturers.splice(selectedManufacturers.indexOf(m), 1);
//             }
//             renderProducts();
//         });
//         nameCol.textContent = m;
//         row.appendChild(nameCol);
//         selCol.appendChild(selButton);
//         row.appendChild(selCol);
//         return row;
//     });
//     for (var i = 0; i < manufacturerRows.length; i++) {
//         manufacturerTable.appendChild(manufacturerRows[i]);
//     }
// }

// function renderColorTable() {
//     var colors = products
//         .map(p => p.color)
//         .filter((value, index, self) => {
//             return self.indexOf(value) === index;
//         });

//     // Render colors table.
//     var table = document.getElementById('filterTableTwo');
//     var rows = colors.map(m => {
//         var row = document.createElement("tr");
//         var nameCol = document.createElement("td");
//         var selCol = document.createElement("td");
//         var selButton = document.createElement("input");
//         selButton.setAttribute("type", "checkbox");
//         selButton.setAttribute('data-criteria', m);
//         selButton.addEventListener('change', function(event) {
//             if (this.checked) {
//                 selectedColors.push(event.target.dataset.criteria);
//             } else {
//                 selectedColors.splice(selectedColors.indexOf(m), 1);
//             }
//             renderProducts();
//         });
//         nameCol.textContent = m;
//         row.appendChild(nameCol);
//         selCol.appendChild(selButton);
//         row.appendChild(selCol);
//         return row;
//     });
//     for (var i = 0; i < rows.length; i++) {
//         table.appendChild(rows[i]);
//     }
// }

// function renderMaterialTable() {
//     var materials = products
//         .map(p => p.material)
//         .filter((value, index, self) => {
//             return self.indexOf(value) === index;
//         });

//     // Render colors table.
//     var table = document.getElementById('filterTableThree');
//     var rows = materials.map(m => {
//         var row = document.createElement("tr");
//         var nameCol = document.createElement("td");
//         var selCol = document.createElement("td");
//         var selButton = document.createElement("input");
//         selButton.setAttribute("type", "checkbox");
//         selButton.setAttribute('data-criteria', m);
//         selButton.addEventListener('change', function(event) {
//             if (this.checked) {
//                 selectedMaterial.push(event.target.dataset.criteria);
//             } else {
//                 selectedMaterial.splice(selectedMaterial.indexOf(m), 1);
//             }
//             renderProducts();
//         });
//         nameCol.textContent = m;
//         row.appendChild(nameCol);
//         selCol.appendChild(selButton);
//         row.appendChild(selCol);
//         return row;
//     });
//     for (var i = 0; i < rows.length; i++) {
//         table.appendChild(rows[i]);
//     }
// }

// function renderProducts() {
//     var filteredProducts = productsNew;

//     if (selectedManufacturers.length > 0) {
//         // Filter by manufacturer.
//         filteredProducts = filteredProducts.filter(p => {
//            return selectedManufacturers.includes(p.manufacturer);
//         });
//     }

//     if (selectedColors.length > 0) {
//         // Filter by color.
//         filteredProducts = filteredProducts.filter(p => {
//            return selectedColors.includes(p.color);
//         });
//     }

//     if (selectedMaterial.length > 0) {
//         // Filter by material.
//         filteredProducts = filteredProducts.filter(p => {
//            return selectedMaterial.includes(p.material);
//         });
//     }

//     // Render product table.
//     var productTable = document.getElementById("productTable");
//     productTable.innerHTML = '';
//     for (var i = 0; i < filteredProducts.length; i++) {
//         var product = filteredProducts[i];

//         var row = document.createElement("tr");
//         var nameCol = document.createElement("td");
//         var priceCol = document.createElement("td");
//         var manufacturerCol = document.createElement("td");
//         var storageStatusCol = document.createElement("td");
//         var storageStatusBox = document.createElement("div");
//         // Set the content.
//         nameCol.textContent = product.productName;
//         priceCol.textContent = product.price;
//         manufacturerCol.textContent = product.manufacturer;
//         storageStatusBox.classList.add("storage-status-box")

//         if(product.storage < 5){
//           storageStatusBox.style.background = "red";
//         }
//         else if(product.storage < 20){
//           storageStatusBox.style.background = "orange";
//         }
//         else{
//           storageStatusBox.style.background = "green";
//         }

//         storageStatusCol.appendChild(storageStatusBox);
//         row.appendChild(nameCol);
//         row.appendChild(priceCol);
//         row.appendChild(manufacturerCol);
//         row.appendChild(storageStatusCol);

//         productTable.appendChild(row);
//     }
// }

// ready(function () {
//   reset();
//   renderProducts();
// });

// function searchProducts() {
//       var searchText = event.target.value;
//       productsNew = [];
//       for (var i = 0; i < products.length; i++) {
//           var prod = products[i];
//           if (prod.productName.toLowerCase().indexOf(searchText.toLowerCase()) > -1) {
//               productsNew.push(prod);
//           }
//       }
//           renderProducts();
//   }
