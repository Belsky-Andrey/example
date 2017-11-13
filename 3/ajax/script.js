$("#form").submit(function(e) {
    $.ajax({
           type: "POST",
           url: "email.php",
           data: $("#form").serialize(),
           success: function(responce)
           {
				console.log(responce);
                $('#result').html('Повідомлення до "' + responce + '" надіслано успішно!'); 
           }
         });

    e.preventDefault();
});