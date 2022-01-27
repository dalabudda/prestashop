const writePromise = require("fs/promises");
const axios = require("axios");
const cheerio = require("cheerio");

(async function pobierz() {

  const links = [
    "https://leddo.pl/lampy/lampki-podlogowe.html",
    "https://leddo.pl/lampy/lampy-sufitowe.html?product_list_limit=all",
    "https://leddo.pl/lampy/lampy-scienne.html?product_list_limit=all"
  ];
  const linksCategoriesID = [3,4,5];

  let productID = 1;
  
  let writeString = '"ID";"Enabled";"Category";"Name";"Price";"Tax rule ID";"Quantity";"Long desc";"Images URL"\n';

  for (let i = 0; i < links.length; i++) {
    const res = await axios.get(links[i]);
    const $0 = cheerio.load(res.data);
    let urls = [];
    const products = $0(".product-item-info .product-item-photo");
    
    $0(products).each((i, value) => {
      console.log($0(value).attr("href"));
      urls[i] = $0(value).attr("href");
    });

    for (let j = 0; j < urls.length; j++) {
      if (/(https?:\/\/leddo)/.test(urls[j])) {

        const product = await axios.get(urls[j], {
          headers: {
            Accept: "*/*",
          },
        });
        console.log("Pobrano: " + urls[j]);

        const $ = cheerio.load(product.data);

        writeString += 
          productID + ";1;" + linksCategoriesID[i] + ";" + $(".page-title span").text() + ";" + $(".product-info-price .price").text().slice(0, -3).replace(",", ".") + 
          ";1;10;" + $(".description p").text().replace(/\n/g, " ") + ";" + $(".gallery-placeholder__image").attr("src");

        productID++;

        /*const labels = $("#product-attribute-specs-table .label");
        const values = $("#product-attribute-specs-table .data");

        for (let i = 0; i < labels.length; i++) {
          writeString += 
            "<atrybut>\n" +
              "<nazwa>" + labels.eq(i).text() + "</nazwa>\n" +
              "<wartosc>" + values.eq(i).text() + "</wartosc>\n" +
            "</atrybut>\n";
        }*/

        writeString += "\n";
      }
    }
  }

  await writePromise.writeFile("./produkty.csv", writeString, "utf-8");
})();
