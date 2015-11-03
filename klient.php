<style type="text/css">
        table,td,tr,th{
            border: 1px solid black;
            border-collapse: collapse;
            padding:5px;
        }
    </style>
<table>
        <tr>
                <th>Eesnimi</th>
                <th>Perenimi</th>
                <th>Email</th>
            </tr>
    </table>
<script type="text/javascript" src="js/jquery.js">
    </script>
<script type="text/javascript">
        $.get("api.php",function(result){
                result=JSON.parse(result);
                for(var i in result){
                        var j=result[i];
                        $('table').append("<tr><td>"+j[0]+"</td><td>"+j[1]+"</td><td>"+j[2]+"</td></tr>");
                    }
            })
</script>