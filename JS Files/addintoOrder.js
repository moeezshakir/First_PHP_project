$(document).ready(function () {
    $(".order-button").on("click", function () {
        var productId = $(this).data("product-id");

        // Send productId to the server using AJAX
        $.ajax({
            type: "POST",
            url: "addIntoOrdert.php",
            data: { productId: productId },
            success: function (response) {
                console.log(response); // Log the server response (if needed)

                if (response === "already_ordered") {
                    alert("Product is already ordered!");
                } else if (response === "order_placed") {
                    // alert("Order placed successfully!");
                    openMessage();
                } else if (response === "order_error") {
                    alert("Error placing the order. Please try again.");
                } else {
                    alert("Unexpected response from the server.");
                }
            },
            error: function (error) {
                console.error(error);
                alert("Error placing the order. Please try again.");
            }
        });
    });
});
