const {Builder, Key, By, until} = require('selenium-webdriver');
const driver = new Builder().forBrowser("firefox").build();

(async function example() {
    try {
        await driver.get("http://94.40.79.249/prestashop");
        for (let cat = 3; cat <= 5; cat++) {
            await driver.findElement(By.id("category-" + cat)).click();
            for (let i = 1; i <= 4; i++) {
                await driver.findElement(By.css(".product:nth-child("+i+")")).click();
                await driver.findElement(By.css("#quantity_wanted")).sendKeys(Key.DELETE);
                await driver.findElement(By.css("#quantity_wanted")).sendKeys(i);
                await driver.findElement(By.css(".add-to-cart")).click();
                await driver.wait(until.elementLocated(By.css(".cart-content-btn")));
                await driver.navigate().back();
            }
        }

        await driver.findElement(By.css(".user-info")).click();
        await driver.findElement(By.css(".no-account")).click();
        await driver.findElement(By.css('#field-id_gender-1')).click();
        await driver.findElement(By.css('#field-firstname')).sendKeys("Pan");
        await driver.findElement(By.css('#field-lastname')).sendKeys("Jakis");
        await driver.findElement(By.css('#field-email')).sendKeys("test"+Math.floor(Math.random() * 9999)+"@test.pl");
        await driver.findElement(By.css('#field-password')).sendKeys("qwe123");
        await driver.findElement(By.css('input[name="customer_privacy"]')).click();
        await driver.findElement(By.css('input[name="psgdpr"]')).click();
        await driver.findElement(By.css(".form-control-submit")).click();

        await driver.findElement(By.css(".blockcart")).click();
        await driver.findElement(By.css(".remove-from-cart")).click();
        await driver.findElement(By.css(".checkout .btn-primary")).click();
        await driver.findElement(By.css('#field-address1')).sendKeys("Adres 11");
        await driver.findElement(By.css('#field-postcode')).sendKeys("00-000");
        await driver.findElement(By.css('#field-city')).sendKeys("Miasto");
        await driver.findElement(By.css('button[name="confirm-addresses"]')).click();
        //await driver.findElement(By.css("#delivery_option_1")).click();
        await driver.findElement(By.css('button[name="confirmDeliveryOption"]')).click();
        //await driver.findElement(By.css('input[id="payment-option-1"]')).click();
        await driver.findElement(By.css('input[id="conditions_to_approve[terms-and-conditions]"]')).click();
        await driver.findElement(By.css("#payment-confirmation button")).click();

        await driver.findElement(By.css(".account")).click();
        await driver.findElement(By.css("#history-link")).click();
        await driver.findElement(By.css(".order-actions a:first-child")).click();
        await driver.wait(until.elementLocated(By.css("wait")));
    } finally {
        await driver.quit();
    }
})();