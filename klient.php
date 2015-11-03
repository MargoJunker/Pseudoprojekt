<style type="text/css">
    table,td,tr,th{
        border: 1px solid black;
        border-collapse: collapse;
        padding:5px;
    }
    th{
        width:150px;
    }
</style>
<table id="tabel">
    <tr>
        <th onclick="Javascript:sortByColumn(this.cellIndex);">Eesnimi</th>
        <th onclick="Javascript:sortByColumn(this.cellIndex);">Perenimi</th>
        <th onclick="Javascript:sortByColumn(this.cellIndex);">Email</th>
    </tr>
</table>
<script class="jsbin" src="js/jquery.min.js"></script>
</script>
<script type="text/javascript">
    $.get("api.php",function(data){
        data=JSON.parse(data);
        for(var i in data){
            var j=data[i];
            $('table').append("<tr><td>"+j[0]+"</td><td>"+j[1]+"</td><td>"+j[2]+"</td></tr>");
        }
    })
    function sortByColumn(data){
        var data=data;
        var table = document.getElementById('tabel');
        var tableData = table.getElementsByTagName('tbody').item(0);
        var rowData = tableData.getElementsByTagName('tr');
        var getTheader=document.getElementById('tabel').getElementsByTagName('tbody').item(0).getElementsByTagName('tr').item(0).getElementsByTagName('th').item(data)
        getTheader.classList.toggle('asc');
        if(getTheader.classList[0]=='asc'){
            for(var i = 0; i < rowData.length - 1; i++){
                for(var j = 1; j < rowData.length - (i + 1); j++){
                    if(rowData.item(j).getElementsByTagName('td').item(data).innerHTML > rowData.item(j+1).getElementsByTagName('td').item(data).innerHTML){
                        tableData.insertBefore(rowData.item(j+1),rowData.item(j));
                    }
                }
            }
        }
        else{
            for(var i = 0; i < rowData.length - 1; i++){
                for(var j = 1; j < rowData.length - (i + 1); j++){
                    if(rowData.item(j).getElementsByTagName('td').item(data).innerHTML < rowData.item(j+1).getElementsByTagName('td').item(data).innerHTML){
                        tableData.insertBefore(rowData.item(j+1),rowData.item(j));
                    }
                }
            }
        }
    };
</script>