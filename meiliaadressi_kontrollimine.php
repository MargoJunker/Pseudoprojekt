<script class="jsbin" src="js/jquery.min.js"></script>

<form onSubmit='validate(); return false;'>
    <p>Lisa aadress:</p>
    <input id='email'>
    <button type='submit' id='validate'>Kontrolli!</button>
</form>

<br/>
<h2 id='result'></h2>
<script>
    function validateEmail(email) {

        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    function validate(){
        $("#result").text("");
        var email = $("#email").val();
        if (validateEmail(email)) {
            $("#result").text(email + " meiliaadress kehtib");
            $("#result").css("color", "green");
        } else {
            $("#result").text(email + " meiliaadress ei vasta õigele formaadile");
            $("#result").css("color", "red");
        }
        return false;
    }

    $("form").bind("submit", validate);
</script>

</body>
</html>