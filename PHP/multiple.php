 <!DOCTYPE html>  
 <html>  
      <head>  
        
           <title>Webslesson Tutorial | Make Simple Pie Chart by Google Chart API with PHP Mysql</title>   
             
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           
           google.charts.setOnLoadCallback(drawChart1);  

           google.charts.setOnLoadCallback(drawChart2);  

           google.charts.setOnLoadCallback(drawChart3);



           function drawChart1()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['canditate','number'],
                          <?php  
                          
                          $connect=mysqli_connect('localhost','root','','vote');
                          if (!$connect) {
                         die("Connection failed: " . mysqli_connect_error());
                          }


                          $query = "SELECT canditate ,count(*) as number FROM president  group by canditate";

                          $result = mysqli_query($connect, $query) ;

                          if(mysqli_num_rows($result) > 0)
                          {
                          while($row = mysqli_fetch_assoc($result))
                          {  
                               echo "['".$row["canditate"]."', ".$row["number"]."],";  
                          }
                        }
                         ?>
                     ]);  
                var options = {  
                      title: 'who will be the next president',  
                      is3D:true,  
                      //pieHole: 0.2  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechartone'));  
                chart.draw(data, options);  
           }  



          

                     function drawChart2()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['canditate','number'],
                          <?php  
                          
                          $connect=mysqli_connect('localhost','root','','vote');
                          if (!$connect) {
                         die("Connection failed: " . mysqli_connect_error());
                          }


                          $query = "SELECT canditate ,count(*) as number FROM ladyrep group by canditate";

                          $result = mysqli_query($connect, $query) ;

                          if(mysqli_num_rows($result) > 0)
                          {
                          while($row = mysqli_fetch_assoc($result))
                          {  
                               echo "['".$row["canditate"]."', ".$row["number"]."],";  
                          }
                        }
                         ?>
                     ]);  
                var options = {  
                      title: 'who will be the next lady rep',  
                      is3D:true,  
                      //pieHole: 0.2  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piecharttwo'));
                        chart.draw(data, options);  
           } 




                     function drawChart3()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['canditate','number'],
                          <?php  
                          
                          $connect=mysqli_connect('localhost','root','','vote');
                          if (!$connect) {
                         die("Connection failed: " . mysqli_connect_error());
                          }


                          $query = "SELECT canditate ,count(*) as number FROM generalsec group by canditate";

                          $result = mysqli_query($connect, $query) ;

                          if(mysqli_num_rows($result) > 0)
                          {
                          while($row = mysqli_fetch_assoc($result))
                          {  
                               echo "['".$row["canditate"]."', ".$row["number"]."],";  
                          }
                        }
                         ?>
                     ]);  
                var options = {  
                      title: 'who will be the next general sec',  
                      is3D:true,  
                      //pieHole: 0.2  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechartthree'));
                        chart.draw(data, options);  
           } 

           </script>  
        
       </head>
     


      <body>
           <br /><br />  
           <table class="columns">
      <tr>
        <td><div id="piechartone" style="border: 0px solid #ccc;height: 400px;width: 450px;padding: 0;"></div></td>
        <td><div id="piecharttwo" style="border: 0px solid #ccc;height: 400px;width: 450px;padding: 0;  "></div></td>
        <td><div id="piechartthree" style="border: 0px solid #ccc;height: 400px;width: 450px;padding: 0;  "></div></td>
      </tr>
    </table>
        </body>
 </html>  
