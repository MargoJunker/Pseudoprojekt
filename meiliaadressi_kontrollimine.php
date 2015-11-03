<script class="jsbin" src="js/jquery.min.js"></script>

<input type="text" id="meil" placeholder="sinumeil@veebidomeen.lühend" size="25" onkeypress="Javascript: if (event.keyCode==13) Emailkontroll();"/>
<input type="submit" value="Kontroll" name="kontroll" onclick="Javascript:Emailkontroll();"/>

<div id="result"></div>
<script type="text/javascript">
    function Emailkontroll(){
        var meil = document.getElementById('meil');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!filter.test(meil.value)){
            alert('Meiliaadress ei vasta õigele formaadile!');
            meil.focus;
            return false;
        }
        else{
            $.get('api.php',{emailvalidation:meil.value},function(data){
                $('#result').text(data);
            });
            return true;
        }
    }
</script>
